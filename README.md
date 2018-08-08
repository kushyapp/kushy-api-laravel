# Kushy API

## Development

### Quick Start (using Docker)

1. Clone project
1. `composer install` in project root
1. Clone Laradock into project (if doesn't already exist)
1. Copy the `laradock/.env.example` to `laradock/.env`
1. Copy the `.env.example` in the project root to `.env`.
1. Change MYSQL_HOST to `mysql`. Add AWS S3 credentials (or CDN images won't display).
1. Start the server: `cd laradock && docker-compose up -d nginx mysql redis elasticsearch`
1. Add the DB tables and seed them: `docker-compose exec workspace php artisan migrate && docker-compose exec workspace php artisan db:seed`
1. Install Laravel Passport (required for fresh installs / migrations): `php artisan passport:install`

You're good to go!

### Startup

This project is setup to use Docker, but Laravel allows you to use various other methods to deploy a development environment. Regardless of what method you choose, you'll be required to setup an ENV file.

#### Adding an Admin

There's a sample User Seed that includes an admin. You can copy this format and run the seed.

Or you could also register for a new user, and then alter the SQL table to modify the user's `type` to `admin`.

#### PHP + SQLite

1. If you're on Windows, make sure PHP is installed globally (`php -v` should work in your Command Line)
1. Create an empty `database/database.sqlite` file.
1. Change the ENV file to `DB_CONNECTION=sqlite`.
2. `php artisan serve`

#### Docker

1. Follow Docker setup instructions below.
2. `cd laradock && docker-compose up -d nginx mysql redis elasticsearch`

### Docker

#### Setup

* Clone laradock (if not already included as a submodule)
* Duplicate the `laradock/.env.example` as `laradock/.env`
* Change the MySQL host in your ENV file to `mysql` (Laradock names servers for services internally instead of using localhost with ports)

##### Multiple Laradock Setups

If you use Laradock on other projects on the same machine, make sure to change `DATA_PATH_HOST` to include your project name, and the SQL DB to be unique. Otherwise you'll share data and lose data (like the SQL DB) between projects.

#### Start Server

One liner (from project root):

`cd laradock && docker-compose up -d nginx mysql redis elasticsearch`

1. `cd laradock` from project root
2. `docker-compose up -d nginx mysql redis elasticsearch`

#### Run Commands

`docker-compose exec workspace npm install`

#### Check logs

`docker-compose logs`

#### See list of containers (nginx, SQL, Redis, etc)

`docker-compose ps`


### Tips

* When first installing project and Laradock, make sure to clear project's cache (rename `/project-name/bootstrap/cache/config.php` to `config_.php`)
* Change `.env` file's `DB_HOST` to `mysql` instead of `localhost`. Laradock labels it's containers by name.

### Common Commands

List all artisan commands:
`docker-compose exec workspace artisan list`

List all registered routes:
`docker-compose exec workspace php artisan route:list`

Make a controller:
`docker-compose exec workspace php artisan make:controller ShopsController`

Add new composer dependency:
`docker-compose exec workspace composer require phpmailer/phpmailer:5.2.*`

Reset composer namespaces:
`docker-compose exec workspace composer dump-autoload`

### Laravel

#### General

**Make Controller:**
`php artisan make:controller ProductController`

**Clear config cache when changing files after deploy:**
`php artisan config:cache`

#### AJAX

**Check for AJAX request in controller**
Great for GET routes that need to double as AJAX endpoints.

```php
public function index(Request $request)
{
    if($request->ajax()){
        return "AJAX";
    }
    return "HTTP";
}
```

### Date / Time

Use [Carbon](https://carbon.nesbot.com/docs/) instead of PHP's `Date\Time` class.

**Format Date/Time value into proper DB format:**

```php
$date_estimated_arrival = new Carbon($request->input('date_estimated_arrival'));
echo $date_departure->toDateTimeString();
```

**Format Date value into proper DB format:**

```php
$date_estimated_arrival = new Carbon($request->input('date_estimated_arrival'));
echo $date_departure->toDateString();
```


### Forms

**Images in forms**

Always include `enctype` param for forms including images.

```html
<form method="POST" action="/business/admin/photos/" enctype="multipart/form-data" class="ui form" >
```


**Error Handling**:

```php
@if ($errors->any())
    <div class="ui negative message">
        <i class="close icon"></i>
        <div class="header">
            There were some errors with your submission
        </div>
        <ul class="list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
```

#### [Events](https://laravel.com/docs/5.5/events)

[**Make Event:**](https://laracasts.com/lessons/laravel-5-events)
1. Add event and listener to $listen array in `EventServiceProvider.php`
2. `php artisan event:generate`
4. Add event to page: `event(new PodcastPurchased($podcastId, $podcastUrl))`

**Queue Events:**
1. Open event listener class and add `class EventHandlerName implements ShouldBeQueued`
2. Above class (at the top of file) add `use Illuminate\Contracts\Queue\ShouldQueue;`

* If you need access queue job functions (like `$this->delete`) - inside event listener class, add `use InteractsWithQueue`

#### [Jobs/Queue](https://laravel.com/docs/5.5/queues#creating-jobs)

**Add job to queue:**
Make the job class first:
`php artisan make:job ProcessPodcast`

Then dispatch the job (make sure to require class deps):
`ProcessPodcast::dispatch($podcast);`

#### [Mail](https://laravel.com/docs/5.5/mail)

**Make mail template:**
Make the job class first:
`php artisan make:mail OrderShipped`

**Add subject and send variables to email:**
```php
return $this->subject("Email_Subject_Here")
            ->view('emails.routes.contactform')
            ->with($this->variableHere);
```
*Ideally you pass a `$this` based var*

#### Testing

Laravel uses [PHPUnit](https://phpunit.readthedocs.io/en/7.1/) for testing. All tests are located in the `/tests/` folder.

**Make a new test**

`php artisan make:test TestName --unit`

> Unit flag is optional to create a "unit test" vs a "feature test". Unit = one function, feature = multiple controllers/models

**Testing API**

Laravel offers a JSON method inside the test class (`$this->json()`) that allows you to query the internal API with different request methods (GET, POST, DELETE, etc). The JSON method returns a response, which offers a `assertJson` method to verify JSON matches what we expect.

Inside the test method/function:

```php
$shop = factory(\KushyApi\Posts::class)->states('shops')->make();
$shop = $shop->toArray();

// Category is required (see StoreShops Request validator)
$shop['category'] = 1;

$response = $this->json('POST', 'api/v1/shops', $shop);

$response
    ->assertStatus(201)
    ->assertJson([
        'data' => [
            'name' => $shop['name'],
            'categories' => [
                ['category_id' => $shop['category'] ]
            ]
        ]
    ]);
```

**Creating fake data for testing**

Laravel uses the Faker library inside *factories* that generate models filled with fake data (`database/factories`). You can use these factories inside tests to quickly create objects to query or use.

You can chain the factory with a `states()` method that accepts comma separated strings (or an array of strings). These are defined in the factories, reference there for all the options. The chains add extra parameters/fields to the created model, like adding a section (in this case 'shops') to Posts.

```php
$shop = factory(\KushyApi\Posts::class)->states('shops')->create();


$shop = factory(\KushyApi\Posts::class)->states('shops')->make();
$shop = $shop->toArray();
```

**Create basic CRUD test**

This command creates a controller template that extends the `CrudTest`, which tests index/store/delete/update methods on API controllers.

`php artisan api:test Controllers/ShippingManifestosControllerTest ShippingManifesto manifestos --crud`


**Authenticating / Adding JWT to POST**

Add the `AttachJwtToken` to the test.

```php
use Tests\Traits\AttachJwtToken;
```

**Running all tests**

`docker-compose exec workspace ./vendor/bin/phpunit`

> Any tests involving SQL must be run through Docker, since the SQL DB is hoisted inside the container (and you're running from outside).

**Running a single test**

`docker-compose exec workspace ./vendor/bin/phpunit --filter ShippingManifestosControllerTest`

> Great for isolating a certain test, particularly when it extends a common base controller and you need to debug it.

**Testing Tips**

* Always chain a unique() to fields like user_id when creating factories: `'username' => $faker->unique()->userName,`


#### Authentication / Middleware

**Check if user is authenticated (Blade) - [see more](https://laravel.com/api/5.2/Illuminate/Auth/Guard.html):**
`@if(Auth::check())`

**If user is guest:**
`@if(Auth::guest())`.

**Auth - Get username**
`{{ Auth::user()->name }}`

**Route with Authentication check middleware:**
```php
Route::get('/my-path', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);
```

**Middleware applied to specific methods in controller:**

Apply one of these in the constructor method of the controller.

```php
public function __construct()
{
    // Only apply middleware to these methods
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
    // Or exclude middleware from these methods
    $this->middleware('auth', ['except' => ['confirmPage', 'confirmOrder', 'invoice']]);
}
```

#### Database

**Seed Database:**
If you've added any new seeders:
`composer dump-autoload`

Then run the seed (this will run all the seed classes listed in `DatabaseSeeder.php`:
`php artisan db:seed`

or
`php artisan migrate:refresh && php artisan db:seed && php artisan db:seed --class=StrainsTableSeeder` 
to rollback and rebuild entire DB with a specific seed class

> Debug the seed using the verbose command `php artisan db:seed --class=YourSeeder -vvv`

**Create DB migration file:**
`php artisan make:migration create_table_name_table --create=table_name`

**Sample migration file:**
```php
Schema::create('links', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('url')->unique();
      $table->text('description');
      $table->timestamps();
});
```

**Run the migration:**
`php artisan migrate`

**Update a table with new columns:**
`php artisan make:migration add_paid_to_users`
```php
public function up()
{
    Schema::table('users', function($table) {
        $table->integer('paid');
    });
}
public function down()
{
    Schema::table('users', function($table) {
        $table->dropColumn('paid');
    });
}
```
#### Query Builder / Eloquent

**Dynamically call Models:**
```php
$dynamic_model = 'Shops';
$model_name = '\\Kushy\\'.$dynamic_model;
$model = new $model_name;
$shops = $model->find($id);
```

**LIMIT and OFFSET**
```php
$users = DB::table('users')
                ->offset(10)
                ->limit(5)
                ->get();
```

#### Blade

**Basic template:**
```php
@extends('layouts.main')
@section('title', 'Page Title')
@section('content')
    Content here
@stop
```

**Link to public assets path in template:**
`{{ public_path('fonts/OptimusPrinceps.tff') }}`


#### Input

*Requires Illuminate\Http\Request as $request*

**Get specific input:**
`$this->request->input('input-name');`

**Get all input as array:**
`$this->request->all();`

#### [Redis](https://laravel.com/docs/5.5/redis)

**Add to the top of any file using Redis facade:**
`use Illuminate\Support\Facades\Redis;`

**Grab a Redis key**:
`$user = Redis::get('user:profile:'.$id);`

**Set a Redis key**:
`$user = Redis::set('user:profile:'.$id);`

#### Sessions

**Access session data:**
`$value = $request->session()->get('key');`

#### [Logging](https://laravel.com/docs/5.6/logging)

```php
# Emergency: system is unusable
Log::emergency($message);
# Alert: action must be taken immediately
Log::alert($message);
# Critical: critical conditions
Log::critical($message);
# Error: error conditions
Log::error($message);
# Warning: warning conditions
Log::warning($message);
# Notice: normal but significant condition
Log::notice($message);
# Informational: informational messages
Log::info($message);
# Debug: debug-level messages
Log::debug($message);
```

#### Pagination

Show a collection's pagination navigation using the Semantic UI template:

```php
$shops->links('vendor.pagination.semantic-ui')
```


#### Other / Random

[**Using components in a loop with @extends? @overwrite, not @endsection:**](https://github.com/laravel/framework/issues/1058)
```php
@section('stuff')
     Stuff goes here...
@overwrite
```

### [UUID](https://medium.com/@steveazz/setting-up-uuids-in-laravel-5-552412db2088)

**Using UUIDs for models:**

Use this instead of `incrementing()` in migration:

```php
$table->uuid('id');
$table->primary('id');
```

Add this to your model:

```php
    /**
     * Generates and inserts uuid when creating new items
     */
    use Uuids;
```

Uuids will be automatically generated on post creation.

### [Flash](https://github.com/laracasts/flash)

Within your controllers, before you perform a redirect, make a call to the `flash()` function.

```php
public function store()
{
    flash('Welcome Aboard!');

    return home();
}
```

You may also do:

- `flash('Message')->success()`: Set the flash theme to "success".
- `flash('Message')->error()`: Set the flash theme to "danger".
- `flash('Message')->warning()`: Set the flash theme to "warning".
- `flash('Message')->overlay()`: Render the message as an overlay.
- `flash()->overlay('Modal Message', 'Modal Title')`: Display a modal overlay with a title.
- `flash('Message')->important()`: Add a close button to the flash message.
- `flash('Message')->error()->important()`: Render a "danger" flash message that must be dismissed.

With this message flashed to the session, you may now display it in your view(s). Because flash messages and overlays are so common, we provide a template out of the box to get you started. You're free to use - and even modify to your needs - this template how you see fit.

```html
@include('flash::message')
```


### [Guzzle](https://github.com/guzzle/guzzle)

1. Use namespace
```php
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
```

2. Use it!
```php
$client = new Client(); //GuzzleHttp\Client
$res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
echo $res->getStatusCode();
// 200
echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'
$result = $client->post('your-request-uri', [
    'form_params' => [
        'sample-form-data' => 'value'
    ]
]);
// POST
```

### [GeoIP](http://lyften.com/projects/laravel-geoip/doc/)

**Get user location data:**
`geoip($ip);`

Example data:
```php
\Torann\GeoIP\Location {

    #attributes:array [
        'ip'           => '232.223.11.11',
        'iso_code'     => 'US',
        'country'      => 'United States',
        'city'         => 'New Haven',
        'state'        => 'CT',
        'state_name'   => 'Connecticut',
        'postal_code'  => '06510',
        'lat'          => 41.28,
        'lon'          => -72.88,
        'timezone'     => 'America/New_York',
        'continent'    => 'NA',
        'currency'     => 'USD',
        'default'      => false,
    ]
}
```

Display default location data:
`geoip($ip = null);`


[Thank to Bitnami](https://github.com/bitnami/bitnami-docker-laravel)

### Homestead

[via](https://petericebear.github.io/installing-laravel-homestead-osx-20160514/)

## Other

### Syntax / Code Highlighting

Make sure to include `highlight.js` and the syntax color style, and then activate the script:

```html
<link rel="stylesheet" type="text/css" href="{{ asset('css/atom-one-light.css') }}">
<script src="{{ asset('js/highlight.pack.js') }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
```

Add a code snippet to a page:

```html
<pre>
    <code class="php">
        <?php echo('something') ?>
    </code>
</pre>
```

## Deployment

### Heroku

1. Swap `.env` file with data from `production.env`
2. Push git commits to Heroku
3. [Check website for changes](http://kushy-frontend-laravel.herokuapp.com/)
4. Swap back `.env` file with data from `development.env`

### AWS

Deployment with AWS is completed through Git. You'd add the staging server's git URL to your project, and push to master.

## Git

### Commit Emoji


|   Commit type              | Emoji                                         |
|:---------------------------|:----------------------------------------------|
| Initial commit             | :tada: `:tada:`                               |
| Version tag                | :bookmark: `:bookmark:`                       |
| New feature                | :sparkles: `:sparkles:`                       |
| Bugfix                     | :bug: `:bug:`                                 |
| Metadata                   | :card_index: `:card_index:`                   |
| Documentation              | :books: `:books:`                             |
| Documenting source code    | :bulb: `:bulb:`                               |
| Performance                | :racehorse: `:racehorse:`                     |
| Cosmetic                   | :lipstick: `:lipstick:`                       |
| Tests                      | :rotating_light: `:rotating_light:`           |
| Adding a test              | :white_check_mark: `:white_check_mark:`       |
| General update             | :zap: `:zap:`                                 |
| Improve format/structure   | :art: `:art:`                                 |
| Refactor code              | :hammer: `:hammer:`                           |
| Removing code/files        | :fire: `:fire:`                               |
| Continuous Integration     | :green_heart: `:green_heart:`                 |
| Security                   | :lock: `:lock:`                               |
| Upgrading dependencies     | :arrow_up: `:arrow_up:`                       |
| Downgrading dependencies   | :arrow_down: `:arrow_down:`                   |
| Lint                       | :shirt: `:shirt:`                             |
| Translation                | :alien: `:alien:`                             |
| Text                       | :pencil: `:pencil:`                           |
| Critical hotfix            | :ambulance: `:ambulance:`                     |
| Deploying stuff            | :rocket: `:rocket:`                           |
| Fixing on MacOS            | :apple: `:apple:`                             |
| Fixing on Linux            | :penguin: `:penguin:`                         |
| Fixing on Windows          | :checkered_flag: `:checkered_flag:`           |
| Work in progress           | :construction:  `:construction:`              |
| Adding CI build system     | :construction_worker: `:construction_worker:` |
| Analytics or tracking code | :chart_with_upwards_trend: `:chart_with_upwards_trend:` |
| Removing a dependency      | :heavy_minus_sign: `:heavy_minus_sign:`       |
| Adding a dependency        | :heavy_plus_sign: `:heavy_plus_sign:`         |
| Docker                     | :whale: `:whale:`                             |
| Configuration files        | :wrench: `:wrench:`                           |
| Merging branches           | :twisted_rightwards_arrows: `:twisted_rightwards_arrows:` |
| Bad code / need improv.    | :hankey: `:hankey:`                           |
| Reverting changes          | :rewind: `:rewind:`                           |
| Breaking changes           | :boom: `:boom:`                               |
| Code review changes        | :ok_hand: `:ok_hand:`                         |
| Accessibility              | :wheelchair: `:wheelchair:`                   |