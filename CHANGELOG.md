# 2.8.5 (August 6, 2018)

## Major Changes

* POSTS MODEL: New scope added that searches by category id (`Posts::category($categoryId)->get()`)
* TRAIT: Created a new trait for API controllers that use the Posts model that creates a `category($categorySlug)` endpoint. Searches the Posts model (via the PostsCategories model) using the category scope.
* Added category trait to shops, brands, products, and strains API controllers.

## Bug fixes

* Products collection: `optional()` helper was not working. Swapped with `$this->when($value > 0, function () { return 'value' })`.
* Reviews endpoint: Added `/post/` method to non-auth middleware exception.


# 2.8.5 (August 3, 2018)

## New endpoint

* `/shops/category/{category}` - Queries for posts by category. @todo: Maybe refactor into model scope.

# 2.8.4 (August 2, 2018)

## Major Changes

* Added Shipping Manifest API resources, controller, factory, and test (passing ✅).
* Added Shipping Items API resources, controller, factory, and test (passing ✅).
* Added User Permissions (aka claiming businesses) API resources, controller, factory, and test (passing ✅).
* FACTORY: Added Delivery drivers factory (for use in manifesto)
* SEEDS: Delivery driver seed adds 10 new drivers using new factory

# 2.8.4 (August 1, 2018)

## Minor Changes

* New Artisan Command: `php artisan api:test OptionalFolder/YourTestName Model endpoint --crud` -- Creates a test based off `tests/Templates/CrudExampleTest.php` and inserts the values from the command.

# 2.8.3 (July 27, 2018)

## Major Changes

* Add new base API controller for handling base API methods (index/store/etc) + authorization middleware. Since most endpoints were copy/pasta anyway, this minimizes the modification later.
* New route: Deals
* Extended most request validations with error validation base class

## Minor Changes

* Created bookmarks factory
* Added validation rules to UserActivity model 

## Bug Fixes

* Categories model now has indicator for no timestamps. Caused issue when creating new categories.

# 2.8.2 (July 25, 2018)

## Major Changes

* Validation / Error Handling: New base class for Form Requests that adds validation errors to JSON responses (`ErrorValidatorBase`).

## Testing

* Added tests for `store()` and `destroy()`. Added notes to README for handling these kind of requests (POST/DELETE).

# 2.8.1 (July 25, 2018)

## Bug Fixes

* Fixed CORS errors and search API endpoint

## Bug Fixes

* Validation: StoreShops required integers for values like longitude, which can be decimal. Use numeric instead. Changed postcode to string, since it may include '-' or even letters in other countries.
* Fixed `show()` test for ShopsControllerTest. Didn't actually insert the shop into DB.

# 2.8.0 (July 24, 2018)

##Major Changes

* API: Installed Spatie's Query Builder. Used to add filtering, sorting, and including relations on API endpoints (usually archives/index). Implemented on /shops/ endpoint (added to Controller and Resource Collection)
* API: Updated Shops, Brands, Products, Strains, Reviews, Orders, Order Items, Activity, Search, Inventory index methods with Query Builder.
* API: Search - Added new SearchController method and endpoint (`/search/posts/`). Uses Query Builder to search entire Posts class (`/search/posts/?filters[name]=Green&filters[rating]=4`).

# 2.7.1 (July 23, 2018)

##Major Changes

* Added basic test for ShopsController (@todo: Missing methods in ShopControllerTest)
* New endpoints: /inventory/, /orders/, /orders/items/, /reviews/, /activity/, /bookmarks/.
* Finished CRUD functionality for /photos/, /categories/ endpoints.

##Minor Changes

* Added more `findOrFail()` to any `find()` queries in API (ensures fallback to 404)

# 2.7.0 (July 23, 2018)

##Major Changes

* API now separated into it's own repo. Frontend, admin, and business dashboard all handled by separate applications fed by this main API.
* API now located https://api.kushy.net for production
* Testing! Added first API test for POST request. Created a Trait for tests to apply JWT to protected API routes (either using inputted user, or using Factory).

##Fresh Laravel install

* Installed auth package
* Installed Passport package, published migrations and updated user_id to UUID, ran `php artisan passport:install`
* Imported database migrations from previous project + fixed bugs
* Imported seeds from previous project
* Imported Models and API Controllers from previous project
* Installed CORS package, added to middleware (`Kernel.php`) and service providers.

## Minor Changes

* Default images now load from local API server using ENV based conditional (in Model's S3 image grabbing methods). Saves S3 bandwidth when testing.

***

# 2.6.4 (July 20, 2018)

##Major Changes

* SEEDS!: Installed iseed Laravel/composer package to create seeds based on DB tables. Created seeds for all major tables (shops, images, inventory, etc).

# 2.6.3 (July 11, 2018)

##Major Changes

* API: Added new endpoints for photos, inventory, reviews, states, and search.

##Minor Changes

* API: Added Users resource to include inside relational endpoints (e.g. for reviews to show username + avatar)

##Bug Fixes

* Fixed the UUID trait (uses Laravel's built-in UUID instead of dependency)
* Added default image fallbacks for User avatar (getAvatar Model method) and Images (getImage method)

# 2.6.2 (July 11, 2018)

##Bug Fixes

* When no featured image or avatar is found in Posts model, the URL for the placeholder image was local, without a server URL. Added a `url('/')` to link to site root.

# 2.6.1 (July 10, 2018)

##Major Changes

* Added base controller for adding search functionality to controllers (`Kushy\Http\Controllers\Base\SearchController`). Use with `$this->search($model, $request)`, with `$request` being the Request object from Laravel/the controller.
* API: Search works for shop endpoint (`http://localhost/api/v1/shops/?search=west`)
* API: Added base search endpoint for search all posts (`http://localhost/api/v1/search/west`)
* API: Added brand to product endpoint (`ProductsCollection`)

# 2.6.0 (May 30, 2018)

##Major Changes

* API RESTRUCTURE! 1.0 TIME!
* * Shops
* SHOPS: Added a `hours` attribute (`$shop->hours`). Took the method from the Shop controller that loops through the post meta and forms the hours of operation array and slapped it into the Posts model as an attribute. @todo: DRY - Refactor ShopsController to use the attribute and remove internal method.

# 2.5.6 (May 30, 2018)

##Minor Changes

* SHOPS PROFILE: Added a details page for the shop description
* SHOPS PROFILE: Refactored the profile to use separate methods in controller for each section
* CLAIM LISTING: Mobile optimizations of grid layout. Removed features we don't actually offer.

##New Components

* `shops.profile.details` - Shows the shop description

# 2.5.5 (May 29, 2018)

##Minor Changes

* FRONTPAGE: Added location navigation under latest shops. Hardcoded to California, but has capability to show any state's cities
* FRONTPAGE: Added product categories under products
* FRONTPAGE: "See more" buttons under cards changed to simple links
* FRONTPAGE: Removed (commented out) the "Explore Kushy" category block that appeared under the masthead on the frontpage
* CONFIG / LOCATIONS: Added city name to cities.
* ABOUT US: Added new graphics
* BUSINESS TOUR: Added new graphics, styled page a bit. Created a new CSS class called `.hero--image-center` for images you want as a large centered hero image + gradients for the background of the image container.
* FOOTER: Removed unnecessary grid, which fixed a problem on mobile with no padding on footer.
* CODE HIGLIGHTING: Now using `highlight.js` to do syntax highlighting for code. Added example to README.
* DEVELOPERS: Fixed logo getting cut off.
* PAGINATION: All the pagination components are now styled correctly. Make sure when calling pagination, use the Semantic UI view template `$shops->links('vendor.pagination.semantic-ui')`.

##Routes

* `/locations/` - Added an index page that pulls all states and cities from config file (`config/city.php`).
* `/developers/getting-started/` - Copied guide from Stay Regular to this page.

##Bug Fixes

* Bookmarks and reviews now working. The UUIDs were getting sanitized as integers, which stripped any characters. We filter as string now to still fish out attacks, but allow for non-integer based UUIDs.

# 2.5.4 (May 25, 2018)

##Major Changes

* BIZ ADMIN / PANEL: Create new product now has primary and secondary categories. Changing primary category swaps subcategories with jQuery. Selecting a primary category also shows pricing fields, based on templates in the view file.

##Minor Changes

* Refactored `AddProductCategories` job to check for multiple select vs normal dropdowns. It broke when I tried passing a normal dropdown to it.
* MIGRATION: Updated inventory units of weight/pricing columns to add default values to fields (queries were breaking because null values were passed).
* BIZ ADMIN: Customize updated with website, mmj/rec license, and separate address fields. Address AJAX search separated into it's own input, and address made another input. Script updated to add formatted address to both search and address fields. This allows for customization of the address past Google's ability (like adding a Suite or Apt #).
* JS: Input Get Location script updated to also send the formatted address to a `#address` field.

##Bug Fixes

* STRAINS: Single page layout updated. Flavor, effects, and ailment links were all wrong.

# 2.5.3 (May 23, 2018)

##Minor Changes

* E-COMMERCE: Added empty cart state.

##Bug Fixes

* Fixed add to cart.
* Fixed link on product archive card. Had hardcoded brand link, and it can sometimes be shop.

# 2.5.2 (May 17, 2018)

##Major Changes

* PANEL: View and add photos, inventory, and deals to posts (e.g. shops).
* DB RESET: Added Chronic Long Beach dispensary and filled out profile fully (photos, menu, deals, etc).

##Minor Changes

* Added featured product photo to menu table component (shows on Shop menu page or backend admin)
* Products component now shows featured image

##Bug Fixes

* Display description on deals on Shop deals page
* Changed from card-based grid to pure grid for Shop deals cards (fixes cards matching height of tallest image and showing white BG space)

# 2.5.1 (May 17, 2018)

##Major Changes

* DB RESET! / MIGRATIONS / UUIDs for all! (mostly) - CONTINUED
* * Fixed Models and removed 'incrementing' from UUID ones
* * Imported Categories, Strains, Strain categories, Strain Meta Data (Flavors, Effects, Ailments), Brands, Brand categories.
* * Added section to brands seeder (to ensure it's inserted to Posts model with section=brand). Refactored Strain seeder to use Eloquent models.
* * 

##Bug Fixes

* BIZ ADMIN: Fixed sidebar issue where "Create Manifesto" dropdown sublink was referencing `$business` object when it didn't need to.

# 2.5.0 (May 17, 2018)

##Major Changes

* BUSINESS PHOTOS!
* * New controller for handling photo section of business admin (`BusinessAdmin\PhotoController`)
* * Added full functionality for business admins to view, create, edit, update, and delete photos from each business.
* * Added photos to Shop single page (`/shops/{slug}`).
* * Added simple Lightbox using Semantic UI + jQuery for images to see larger sizes.
* * @tips: Make sure to clear Session of any CDN image URLs or you'll get broken images when updating the image DB.
* DB RESET! / MIGRATIONS / UUIDs for all! (mostly)
* * Fixed a lot of old migrations (mostly drop statements)
* * Fixed old seeds for Brands and Strains (removed non-existent columns)
* * Backed up and deleted local DB, then ran migration with altered tables.
* * Most tables altered to use UUID system instead of incremental IDs like before. All relationships defined inside other migrations have been updated to reflect the UUID change (and removing any unnecessary `->unsigned()` modifiers). All models have been updated to use the UUID trait to generate a UUID on post creation. @tip: Make sure to use Eloquent ORM when adding any UUID posts, or to include a UUID in the POST request, because it will fail if you try adding to the table directly without one.
* * Created more seeds to assist development. Real licensed recreational California shops, user permissions, etc.
* * Added `username` column to users table to allow for unique slugs for profiles. Swapped `name` fields in register page and modal for `username`, and made `name` field nullable just in case (as well as `RegisterController`).
* * Added soft deletes to Posts, Images, Inventory, Carts, and Shipping Manifestos tables.
* * Added `pricing_type` column to inventory to have a string to indicate pricing structure (e.g. grams vs per unit)

##Minor Changes

* MIGRATION: Added `status` column to `images` table. Allows original poster, biz admin, or super admin to enable or disable photos for display.

##Bug Fixes

* PANEL / CREATE: Made the create form able to handle images using `enctype="multipart/form-data"` (it was previously dropping any media like images). Added to README for clarity later.

# 2.4.5 (May 16, 2018)

##Minor Changes

* SHIPPING MANIFESTO: UX updates
* * Added copy to clipboard on manifesto archive/index
* * Added JS script to lock `qty_received` input to max out at 
* * Printer friendly page and CSS (/manifesto/print/{id}). Font sizes and padding reduced to ensure it fits on one page like official PDF. @todo: Needs additional page with product table if product count is greater than 2-3 items ++ page count on first page
* * Delete product from create form
* * Added validation policies for creating and confirming manifestos (`CreateManifesto` and `ConfirmManifesto` under `Kushy\Http\Requests`)
* * Added mail for creation and confirming of manifestos. Sends email to shipper (user logged in), receiver, and distributor.
* * @todo: Associate with a business

# 2.4.4 (May 11, 2018)

##Major Changes

* COMPLIANCE / METRC: Shipping Manifesto feature started. Migrations and models created for `ShippingManifestos`, `ShippingItems` (like OrderItems), and `DeliveryDrivers`. 
* * Confirm page: If user changes retail price, total changes automatically using jQuery.
* * Confirm page: GUEST VIEW. Added new middleware `BusinessAccessToken` as `business_token`, which allows any request (no auth checks). Updated the `ManifestoController` constructor and removed the business middleware and grouped the other manifesto routes together under the business middleware in the main routes file `web.php`. Also updated the middleware in constructor that grabs verified shops to return the next request on authentication failure (to fix the bug of Laravel not knowing where to go and losing headers).
* UUIDS: Added UUID composer package to generate Uuids hashes instead of incrementing integers. Added to new tables. @todo: migrate users, posts, and other larger tables and public id tables to uuid.

# 2.4.3 (May 11, 2018)

##Major Changes

* E-COMMERCE: Cart features added -- "update cart" item quantities and delete cart items (`shopCartForm` method in controller). `Carts` table refactored into `carts` and `cart_items` like orders. Made session handling more difficult than it needed to be.
* * Add to Cart: Route changed from `/cart/{slug}` to `/cart/{slug}/add`
* * Linked product in shopping cart to product page

## Migrations

* USERS: Updated with new fields for billing and shipping information. 


# 2.4.2 (May 9, 2018)

##Major Changes

* E-COMMERCE: Started implementing e-commerce system.
* * Added "add to cart" buttons to shop menus.
* * Added routes for cart + adding items via POST
* * Order items model configured to eager load product
* * Models created for each new migration with proper relationships. Updated `users` and `inventory` model with relationships to carts and orders.
* * 

## Migrations

* Added new tables `carts`, `orders`, `order_items` to store e-commerce transactions. Carts is temporary DB storage for current and abandoned shopping carts, session/cache gets dumped here when things get added/removed. Orders handles carts taken through checkout. Order items is a relational table to orders that stores product IDs. 


# 2.4.1 (May 9, 2018)

##Bug Fixes

* ADD REVIEWS - Switched from queue job to service class. Jobs not working, and not showing as failed (so no exception/error msg is thrown). 
* ADD STRAIN REVIEWS - Didn't grab strain meta data correctly.
* FRONTPAGE — Laravel 5.6 update error, I was using deprecated setTrustedProxies method
* ACTIVITY CARDS — Copy text change for reviews card.
* PRODUCTS/BRANDS ARCHIVE - Laravel 5.6 update error, I was using deprecated setTrustedProxies method


# 2.4.0 (May 9, 2018)

##Major Changes

* UPDGRADE / UPDATE -- LARAVEL 5.5 -> 5.6: Followed guide [here](https://laravel.com/docs/5.6/upgrade). Changed dependencies in `composer.json` to match new deps (PHP 7.1.3, Laravel 5.6, fideloop proxy 4.0, passport 5.0). Didn't work. Tried updating only Laravel with `composer update`, worked, then did proxy + passport. [See this StackOverflow answer for tips](https://stackoverflow.com/a/48674180)
* * Added default logging config file (`config/logging.php`).

##Minor Changes

* JOB - ADD REVIEW: Added error handling using `Log` facade and informs user of error.

##Bug Fixes

* Changed `Http\Middleware\TrustProxies.php` for Laravel 5.6 update.


# 2.3.29 (May 9, 2018)

##Bug Fixes

* STRAIN REVIEWS: Accidentally removed POST route for strain reviews. Added one for main single strain page route (/strains/{slug}), and it's reviews sub page (/strains/{slug}/reviews).

# 2.3.28 (May 7, 2018)

##Major Changes

* DEALS: Added single page for deals (deals/{slug}). 

# 2.3.27 (May 7, 2018)

##Major Changes

* SHOP PAGE: Added deals. Loops through Posts model `children()` relationships and finds posts in `deal` section. Loops through those on view with new deal card (`components.deal.card`)

## New Components

* `components.deal.card` - Semantic UI card for archive deals. Displays image, title, and time -- links to single page for deal.

# 2.3.26 (May 7, 2018)

##Bug Fixes

* USER DASHBOARD: Referenced `yield('javascript')` in bottom of layout, which was also in footer component -- causing double the JS on user dashboard pages.

# 2.3.25 (May 7, 2018)

##Bug Fixes

* USER PAGE: Bookmarks was referencing `getAvatar` method on Posts model without checking if one existed first.

# 2.3.24 (May 7, 2018)

##Bug Fixes

* SHOPS PAGE: Postal code added to header (was referencing wrong field name).

# 2.3.23 (May 7, 2018)

##Bug Fixes

* JS / Google Maps: Swapped HTTP with HTTPS when loading external Google Maps JS resources.
* BUSINESS ADMIN: Instead of using address field, grabs from streetNumber and streetName hidden inputs that get filled by Google Maps. Prevents users from searching for addressing and having it double up (because address = full address with city etc ++ our city, zip, etc fields).

# 2.3.22 (May 7, 2018)

##Major Changes

* SHOP HOURS: Added shop hours of operation functionality to website. Uses post meta relationship to store each day's open and closed times as separate meta keys/values. Added hours inputs to BusinessAdmin customize page. Also added hours to shop sidebar, as well as a indicator (small label with icon + text) in shop header if shop is open or not.
* JOBS -> SERVICES: Refactored `AddReview` job into Service class, as well as `AddUserActivity` and `AddStrainReviewMeta`. Swapped the use of the AddReview job in ShopController @todo: replace AddReview job with service in brands, products, and strains controllers.
* STRAINS PAGE: Refactored the main view file (`strain.show`) into a layout file (`layouts.strains.single`) and separate view files for each section (e.g. `strains.reviews`).
* STRAINS PAGE: Added flavors, effects, and ailments to the page.

##Minor Changes

* STRAIN REVIEWS: Refactored component to Semantic UI comments style, like other reviews. 
* BOOKMARKS: Sortable table, styled the sections with Semantic UI label CSS.

## New Components

* `dropdown.hours` - A Semantic UI styled dropdown with a list of all 24 hours in a 2400 hour format (1:30PM = 1330). Used in admin panels.

##Bug Fixes

* STRAINS PAGE: Fixed add review button. Now link to review page.
* STRAINS PAGE: Fixed the strain category in breadcrumbs and header (instead of deprecated `$strain->type`, we reference categories)

# 2.3.21 (May 4, 2018)

##Major Changes

* MMJ VERIFY: Added Semantic UI Steps component to user profile MMJ verification page. Steps as show completed as user uploads images and gets verified. @todo: AJAX updates of the steps to automatically upload instead of user clicking "save changes". @todo + @bugfix: Clicking form opens upload field twice.


# 2.3.20 (May 4, 2018)

##Minor Changes

* REVIEWS: Linked author and avatar to actual author page

##Bug Fixes

* REVIEWS: Reviews component `noname` referenced user through `Auth::user()->id` without checking if user was logged in first (using `Auth::check()`)

# 2.3.19 (May 4, 2018)

##Major Changes

* DB: Deleted duplicate categories on Posts (like products)
* PANEL: Refactored DeletePost job into a Service. Also made it delete reviews and user status, instead of marking as hidden. Most jobs, unless they're CPU intensive, should be made into Services. Added this new DeleteJob service to the `destroy()` and `manageForm()` functions that handle deleting in Panel.
* PANEL: Added multi-select to Manage Products and products table body component.

## Production Changes

* AWS EC2: Installed memcached and curl (for IP location plugin) PHP drivers (`sudo apt-get install php7.2-curl` and `sudo apt-get install php7.2-memcached`). Restarted the server (`sudo service php7.2-fpm restart`).

# 2.3.18 (May 3, 2018)

##Major Changes

* BIZ ADMIN: Added "Create new product" page. Adds product to posts table + inventory of selected shops.

##Minor Changes

* BIZ ADMIN: Commented out Orders and Deals from Business Admin sidebar (inside the BizAdmin blade layout)
* BIZ ADMIN: Menu page - Refactored editable table input JS to check for input ID (instead of a JQuery selector for the input ID). Added @todo notes to page for future refactoring.


# 2.3.17 (April 30, 2018)

##Bug Fixes

* UFW disabled to allow for SSH
* Frontpage cache conditional fixed (used `isset()`)
* PostsCategories model `categoryName` attribute was references categories instead of actual category model relationship.
* 


# 2.3.16 (April 27, 2018)

##Major Changes

* API: Added separate method in `ApiController` for handling strains. Added categories.
* API: Refactored filters into method in `ApiController` to allow for reuse in any other method (`$this->filters($filter, $model)`)
* MODEL: Forced eager loading on `PostsCategories` model and the categories relationship method, so whenever you query `PostsCategories`, you always get the name.
* PRODUCTION: Added SSL to AWS EC2 Ubuntu Nginx instance using Let's Encrypt and certbot.

##Minor Changes

* HEADER: User dropdown menu items now 100% width, so they aren't awkwardly centered. Icons changed and made gray.

# 2.3.15 (April 26, 2018)

##Major Changes

* FRONTPAGE: Removed category dropdown from search. Added list of major categories underneath.
* FRONTPAGE: Swapped major categories under "Explore Kushy" with randomized sub-categories.
* CACHE: Installed `memcached` on production AWS server. Updated AWS production `.env` to add memcached as cache driver + username/password. @todo: setup firewall to prevent ddos.
* CACHE: Cache implemented roughly on frontpage for shops.
* USER PROFILE: User profile migrated from Bootstrap to Semantic, and refactored into a layout (`layouts/userprofile.blade.php`) and separate views for each page (reviews, activity, and bookmarks)

##Minor Changes

* FRONTPAGE / CSS: Changed background color of CTA when user is logged in ("Reserve and review products") from red to gray.

# 2.3.15 (April 25, 2018)

##Major Changes

* BIZ ADMIN: Multi-select categories added to Customize page.
* BIZ ADMIN: Added Google location search to address field on Customize page.
* SEARCH: Search now working with location data. Queries DB for 100 posts based on lat/lng, filters collection results by search term, and then manually paginates.
* SEARCH: Changed from POST to GET. Manual pagination using `LengthAwarePaginator` doesn't work with POST.
* SHOPS ARCHIVE: Grabs IP, returns geolocation, and queries latest shops by location. If there are no shops nearby, just queries latest shops.
* LOCATIONS: Refactored the way locations (`/california/santa-ana`) work. Generic template created for state pages and extra fields (`description`, `cities`) added to state config file (`config/city.php`). Cities pages now working using new location search and styled correctly.

##Bug Fixes

* Fixed SQS configuration. Queued jobs were failing in production because `.env` file had the queue name appended on the prefix URL. Removed it and fixed.
* BIZ ADMIN: Location on Customize page now uses correct DB fields (was using deprecated `location_` prefix).
* BIZ ADMIN: Avatar on Customize page now working. Wasn't using the `getAvatar` method from `Posts` model, added conditional statement to check for no avatar. @todo: add default avatar into `getAvatar` method.
* Removed extra brand reference from brands archive card. It was displaying a blank array `[]` above brand name.
* BRANDS 'SHOW' PAGE: Fixed styling of content area + reviews to assimilate with other single page designs. Also fixed review number from taking up a whole line (now sits on side of stars). And made review button smaller, and linked to review sub-section of page.

# 2.3.14 (April 18, 2018)

##Major Changes

* SHOPS: Shop menu upgraded. The inventory query is sorted by category now (flowers, concentrates, etc) and prints separate tables for each. Each table is a different component, since different product types will display different data (e.g. edibles show `list_price`, but concentrates show `half_gram`). 
* DB: Added new columns to `inventory` table. Added `status` to track if business wants to show/hide product. Added `stock` to track quantity of product available. Added common units of measurement for cannabis (`eighth_ounce`, `ounce`, `half_gram`, etc).
* BIZ ADMIN: Updated "Manage Menu" route. Tables now filtered by product categories. Tables columns are sortable using `sorttable.js`.
* COMPONENTS: `products/menu/edibles.blade.php` and `products/menu/thead/edibles.blade.php` updated to accept a `editable` boolean as props. If editable is true, checkbox components are shown and price fields are setup for JS editing.
* DB: Added new columns to `users` table for MMJ verification. `verified` boolean shows if user has been approved by Kushy staff. `drivers_license` and `doctors_rec` have private S3 URLs. And location data (`city`, `state`, etc) was added to check user's medical state + setting up for future e-commerce.
* USER / MMJ VERIFY: Added tab to User Dashboard for MMJ Verification. File input fields upload to S3 and store in private user columns.
* API: Updated user endpoint to show MMJ verification status to apps with approved scopes/tokens. Also refactored the way it works, instead of if/else + returns, just 1 return with a single variable getting modified with ifs.

# 2.3.14 (April 18, 2018)

##Major Changes

* BIZ ADMIN: Added multi-select checkboxes to Manage Menu route. Added new controller method for handling menu form. Added mass delete functionality. @todo: Functionality for Mass Edit
* BIZ ADMIN: Added sale price, list price to Manage Menu table. Moved Delete and Edit buttons to a hover menu on table row.
* BIZ ADMIN: Employee invite now working. Creates account for new users + emails password, or emails existing user. @todo: Invite link for new users not working. Need new route `/invite/{inviteHash}`
* BIZ ADMIN: Added quick editing for Manage Menu route. Clicking the `sales_price` and `list_price` table cells change to input with price auto-inserted. Clicking away changes back to non-input. @todo: keyboard friendly shortcuts to cancel input instead of only leveraging window click events.
* JS: Factored out "Select All" checkbox functionality to `js/components/CheckboxSelectAll.js` and recoded to support multiple "Select All" checkboxes.

# 2.3.13 (April 6, 2018)

* PANEL: Added checkboxes to manage section + buttons on bottom of table to delete/edit/feature listings. Now possible to select all items on current page and delete. Created new method in `PanelController` for handling these mass actions.
* PANEL: New and edit shop pages now search for location using Google Maps and fill out input fields with proper info based on search. JS function created (`public/js/input-get-location.js`). Simply include in file along with Google Maps library, then make sure inputs have proper IDs, and good to go.
* PANEL: Multi-select categories added to new post method. HTML added to shops view, needs to be added to others.
* PANEL: Restyled table in manage posts section. Added checkboxes, made full width, and forced column sizes to ensure name gets space. The hover menu for each row was floated right, to avoid as much hover "pop-in" which shifted the post name up and down on hover.
* PANEL: Added dupe check for existing slugs during new posts. If existing slug detected, redirects back with error. @todo: make sure the input fields get re-filled with failed data

# 2.3.12 (March 29, 2018)

##Major Changes

* API: Installed Laravel Passport to integrate OAuth 2 support to website. 
* * Edited User model to add API token trait. 
* * Edited AuthServiceProvider `boot()` method to add Passport routes and token expiration times. 
* * Added React components that help create access tokens and client keys. 
* * Restyled React components with Semantic UI CSS and React.
* * Scopes created: API will now use scopes to determine a token's access level. For example, an client can create a new app and use the "access-email" scope, which would allow their app to see user email. In the API, we check for this token (`user()->tokenCan('access-email')`) and return the JSON response with an additional email field (which is normally hidden).
* * * @todo: Create Kushy documentation and include a section for API scopes to keep track.

# 2.3.11 (March 19, 2018)

##Major Changes

* DEV: Changed Queue driver from AWS SQS to local sync.
* BUSINESS ACTIVITY: Deleted table `business_activities` and added new `post_id` column to `user_activity` table. @todo: migrate to production server
* USER ACTIVITY: Use Query Builder's `->whereIn('section', ['bookmarks', 'reviews', 'useful'])` when querying activity on the user side. 
* BIZ ADMIN: Staff / employee management added. Capable of viewing employees and inviting new ones.
* USERS / STAFF: Added `invite` column to `users` table. Contains hash code for invite URL. Once user uses the invite URL once, the column get wiped and becomes null.

##Minor Changes

* PANEL: Changed array check from `count()` to `is_array()` because it crashed due to a non-integer variable

# 2.3.10 (March 19, 2018)

##Major Changes

* BUSINESS ACTIVITY! Added new table for business activity (needed 1 extra column from user activity ++ extra privacy). 
* NEW JOB: CreateBusinessActivity. Accepts user id, business id, the post id (product, coupon, etc), and the action (inventory, coupon, etc). Actions are listed in the job comments.

# 2.3.9 (February 22, 2018)

##Major Changes

* REVIEWS: Swapped out Review styling with Semantic UI's Comment view/component. 
* UPVOTE/DELETE REVIEWS: Changed from a form+button combo to a link. Changed the UserController upvote method to accept regular and AJAX requests.

##Bug Fixes

* API: Fixed problem where /posts/ route wasn't loading. The section `posts` was getting trimmed, so reference `post` instead.

# 2.3.9 (February 21, 2018)

##Major Changes

* Location search now working again. Added the location/haversine formula to Posts model. @todo: Still need to take the location data and search for a string (and order not by distance, but by accuracy of string).

##Bug Fixes

* API: Strains/shops/etc wasn't working because of new endpoint for `/posts/`. Fixed by swapping an if statement.
* Navigation on category pages (/shops/ or /shops/category/headshop) now stacks on mobile (instead of forcing X per row) 
* FRONTPAGE: Cards now stack on mobile.
* BIZ ADMIN / CSS: Sidebar didn't extend to length of content, so we set BG to red, which caused red to show under shorter content pages. Now the content section is position absolutely (like the sidebar), and extends to bottom. BUG: Some content extends past <body> (like the shop customization page)
* COMPONENT: `strains.archive` now displays location data (was using old `location_` prefixed columns)

# 2.3.8 (February 19, 2018)

##Major Changes

* Strain reviews now working. Changed the way `AddStrainReviewMeta` works, now chains off the new review eloquent model that is created (`$newReview->strainMeta->saveMany()`) - instead of creating a strain reviews object (`ReviewsStrains::create()`)
* PANEL: Editing strain meta data working. Added `AddStrainPostMeta` job to handle looping through all the meta data (effects, flavors, and ailments) for the strain, checks if the post meta exists, and if not adds a new entry. Edit page now uses Semantic UI multiple selection dropdown with pre-selected options.
* PANEL: Categories in products now works with Semantic UI multiple select dropdown.
* AUTOCOMPLETE: HeaderSearch and Panel>Edit>Brands now using [Semantic UI search component](https://semantic-ui.com/modules/search.html#/examples).
* API: Added `posts` endpoint to API to query all types of posts at once.


##Minor Changes

* COMPONENT: `products.archive` now accepts `$brand` eloquent model to replace the (ideally) eager loaded relationship table
* New strain review: Moved `strains.section.newreview` to `components.reviews.newstrainreview`
* BRANDS: Single brand page now displays the brand's products if associated with PostsRelationships table. Also fixed sub-sections (products, reviews) not working, used `Request::segment(3)` and `.hide--js` structure from Shops page.


# 2.3.7 (February 18, 2018)

##Minor Changes

* Added attribute to User model (Auth::user()->isBusiness) to check if user type = allowed business type (admin, employee, etc). Returns boolean true or false
* UX: Added link to Business Admin in header with new business check User attribute.
* Add Your Listing: Finished page, sends email. Categories now swap with jQuery based on selection.

# 2.3.6 (February 15, 2018)

##Minor Changes

* MIDDLEWARE: Added new middleware for detecting users who manage businesses (reps, employees, owner, and admin).
* BUSINESS ADMIN: Added middleware to redirect regular users and guests aways

# 2.3.5 (February 15, 2018)

##Minor Changes

* BUSINESS ADMIN: Now styled to look and function like a dashboard with disappearing sidebar on mobile.
* BUSINESS ADMIN: Sidebar items show as dropdowns, unless section is active, then turns into regular visible menu.
* BUSINESS ADMIN FIX: Adding items to menu was broken in JS. Fixed, and updated with a little JQuery.

# 2.3.4 (February 14, 2018)

##Minor Changes

* UPVOTES: If user isn't logged in and attempts to upvote, shows popup notifying them to register. @todo: add case to check error for Unauthorized (not logged in) vs other errors


# 2.3.3 (February 13, 2018)

##Major Updates

* UPVOTES: Added upvoting to reviews using AJAX. Updated the review and adds +1 to useful column, and then updates the upvote component to show a new number (if it had 3, it turns to 4).
* Moved JS yield from main layout blade to footer component
* AJAX: Delete reviews now works with jQuery to dynamically delete review from DB and fade out Review component

##Minor Changes

* CSS: Improved search page CSS for search results. Instead of using white continainer for cards, `.segment.basic` is used. Card column hard-coded to `.three`.

##Bug Fixes

* PANEL: Users now delete-able. 
* USER ACTIVITY: Components now working. Activity loop had issue where data repeated last item in loop. Resolved swapping `@endsection` with `@overwrite` -- see readme for Laravel bug issue and resolution.
* FIX: UserActivity query on homepage doesn't find activity labeled "useful" (review upvotes).

# 2.3.2 (February 9, 2018)

##Major Updates

* JS: Added `tablesort` JS/jQuery lib to sort tables, used on shop menu page.

##Minor Changes

* PANEL: Fix ability to feature posts (was using old Featured model)
* PANEL: Image upload working with shops, brands, strains, products. Forms added to edit template and controller function working.
* PANEL: Added column to Manage Users page that shows social media network if social login was used
* FIX: Profile pic was erasing avatar due to copy/paste error. Now working.
* Add Bookmark working with new relationships
* PANEL: Featured page converted to use Posts model
* PANEL: Fixed Manage Shops/Brands/etc sorting by category
* FIX: Product categories for business admin menu and panel table
* FIX: Biz admin - Selectable dropdown for adding new existing products
* FIX: Swapped text for icons in business admin menu
* FIX: Business admin mobile sidebar menu item hidden with CSS
* FIX: Custom JS scripts that used `.hide` for hiding elements swapped to `.js--hide` class
* FIX: Added class to card containers to create pseudo grid (`.ui.three.cards`). Fills out gaps using default card width, and allows for equal height (instead of fluid cards inside of grid).
* CRITICAL FIX: Bookmark activity card now references correct relationship

##New Components

* `panel.table.body.{section}` - Table body for each panel section. Abstracts looping logic to allow for using model relationships (`foreach $shop` vs `foreach $shop->post`). `panel.table.{section}` now accepts $filter boolean to swap between loop methods.

# 2.3.1 (February 8, 2018)

##Major Updates

* SEARCH: Added tabs to browse search sections
* User Activity: Added status column. If activity is deleted, status is changed to false (to preserve log).
* UX/ONBOARDING: Login/Register buttons in top header now activate modals with form
* Business Admin: Added pusher sidebar for mobile. @todo: add CSS media query to hide header sidebar button in desktop viewports

##Minor Changes

* SEARCH: Working with new Posts system
* FIX: Sections now working with new Posts system (e.g. brands + brands/category)
* Business Admin: Now working with new Posts system
* * Tested: Claim, Customize, Add Inventory (from existing), Edit Product
* Panel: Now working with new Posts system
* * Create, edit, delete, featured

# 2.3.0 (February 5, 2018)

##Major Updates

* DB RESTRUCTURE! - Brands/Shops/Strains/Products all in one table called Posts. See Sketch diagram for more details on new structure.
* * Imported sections into Posts table

##Minor Changes

* CSS: Touched up Shop and Product profiles, match more Sketch file
* CSS: Box shadows now match Sketch file
* CSS: Added extra padding to `.segment` to match Sketch
* Added MailChimp subscription form to frontpage
* CSS: Restyled Claim listing button
* CSS: Added `.cta--slim` and `.cta--padding` for more slim CTAs that don't need to be forced height.
 
##New Components

* `buttons.claimlisting` - Displays claim listing button on shop/brand pages. Requires section(brands/shops), biz name, and biz ID.
* `user.avatar` - Displays user avatar or default placeholder. Takes User model attribute, usually from a relationship.
* `activity.row` - Template for activity in feed form
* `activity.card` - Template for activity in card form
* `activity.card.bookmarks` - Extends card layout with variables and text
* `activity.row.bookmarks` - Extends row layout with variables and text



# 2.2.5 (February 3, 2018)

##Minor Changes

* FIX: Search page filter dropdowns now show selected options
* FIX: Made frontpage FrontSearch text-transform more specific (was effecting dropdown text)
* FIX: Search page section filter now working (e.g. search chocolates in -> products <-)
* PANEL: Added multiple select to create new product (changes input from array to comma-sep value)
* FIX: Added nullable and default values to products table migration. @todo - need to change on production DB
* PANEL: Added categories to products archive table
* PANEL: Styled artifact panel edit template with Semantic UI

# 2.2.5 (February 3, 2018)

##Major Updates

* CLAIM LISTING - Panel page added to manage verified listings. Can verify and un-verify users from a business.

##Minor Changes

* Fixed verified shops seeder after changing `users_permissions.business_owner` column to `claimed`
* Panel: Add new product page's category dropdown now pulls from cat DB -- @todo - needs to insert to relationship table by ID.


# 2.2.4 (January 31, 2018)

##Major Updates

* CLAIM LISTING - Started the claim system. Added a claim page (/business/claim/), added claim button to shops single page. User sends POST data to page with business ID, name, and section. @todo - add page to pabel to verif claims and functionality to email user about claim, email us notification
* * Updated `users_permissions` table with `claimed` boolean column. `business_owner` deprecated and renamed to `user_type`, which is an string (owner, employee, or representative)
* * Claims page works to register new user and adds claim to DB (@todo: add user_type to user registration DB create)


# 2.2.3 (January 29, 2018)

##Major Updates

* New helper function `nicetime($date)`. Converts any date/time to "2 hours ago" format.
* Search refactored. Geolocation now working - @todo still needs search integration (keywords + haversine);

##Minor Changes

* AddBookmark checks for dupe bookmark and returns appropriate error
* BUG FIX: User avatar now shows on reviews
* Added dropdown menus to product category with subcategories (Shatter, RSO, etc)
* Added new input component to social media form on user dashboard (/dashboard/settings/)
* Archive card components for sections (`ShopArchive`) now are links instead of articles (<a> vs <article>)
* BUG FIX: mobile/grid issues on frontpage + header/footer components
* Added hidden input for new reviews to capture rating
* BUG FIX: Reviews now show accurate rating with new SUI component


# 2.2.2 (January 28, 2018)

##Major Updates

* Finished Semantic UI conversion for Business Admin
* Business admin URLs in components/views converted from `/business/admin/manage/` to `/business/admin/{{ $section }}/`. Added `$section` var to all BizAdmin methods.
* FANCY: Added loader + new list components for the product list to "Add menu item" page
* FANCY: Customize page features a "Reveal" component for avatar that reveals an avatar upload form

##Minor Changes
* Empty states added to business admin reviews and menu

##New Components
* `components.$section.tablerow` - For shops/brands/etc - prints `<td>` table cells with basic strain data. Doesn't print `<tr>` table row, so you can add extra buttons and custom headers. @todo Add default table header components for each section too - @todo maybe refactor `panel.list` components.

# 2.2.1 (January 27, 2018)

##Major Updates

* Backed up production DB + added new migrations/seeds (categories + relations)
* SEMANTIC UI
* * Most frontend pages converted to Semantic UI components. 
* * Re-worked the way breadcrumbs work -- @todo still needs to set active breadcrumb + not show divider on last one
* * Panel pages converted + create featured post page has fancier components (loading input)
* * Flash status messages styled with Semantic
* * CSS: Added Gotham as header font

# 2.2.0 (January 26, 2018)

##Major Updates

* SEMANTIC UI
* * Installed `semantic-ui` to project root
* * Added semantic to webpack/laravel mix
* * Created new `kushy-v1` theme inside `semantic` folder
* * Added semantic assets and JQuery to header

##Minor Changes

* Added version control to CSS/JS in Laravel Mix. Website now should auto-refresh CSS/JS instead of loading old cache.

# 2.1.1 (January 24, 2018)

##Major Updates

* Business - Reviews. Biz can now see and manage reviews by flagging or unflagging them (to enable/disable visibility).
* Business - Customize. Biz can now edit listing details (description, location, etc).
* CSS Fixes - Biz dashboard is now mobile friendly. Sidebar hides on mobile, shows mobile menu. Changed major header classes to account for mobile btn.

# 2.1.0 (January 23, 2018)

##Major Updates

* BUSINESS ADMIN! - /business/admin/

###Business Admin

* Claim listing -- /business/admin/claim-listing/ - sends email (@todo: add pending claim to listing + panel page for staff to verify them)
* Manage verified shops shows list of all shops
* Shop/brand menus + edit/delete functionality for inventory items
* Add inventory to menu works -- added function as Job for global use (@todo: refactor PanelController inventory route with new Job)

##Minor Updates

* NEW - SEEDER: Inventory and UsersPermissions tables - adds default values for development (adds verified shops to admin acct)

# 2.0.2 (January 21, 2018)

##Minor Updates

* NEW - SEEDER: Featured table, adds sample data.
* FIX: Shops/Archive component category now checks for empty cat var


# 2.0.1 (January 20, 2018)

##Major Updates

* Upgraded category sections with new category model.

##Minor Updates

* Upgraded section archive components (shops/archive) with new category model.


# 2.0.0 (January 19, 2018)

##Major Updates

* CATEGORIES! - API breaking change, required update of each section's use of category section. Categories stored in Categories table, with post relationships in Categories Relationships. Both eloquent models are setup, as well as each sections (belongsTo). 
* Panel edit updated with new category options.

##Minor Updates

* Fixed static routes in single shop page (/reviews/ or /deals/). Used `Request::segment(3)` vs the old `$section` variable from the dynamic route.

## 1.10.0 (January 16, 2018)

##Major Updates

* Static routes for section sub-routes (`/shops/dispensary-name/reviews/`). Each route is defined by name to avoid conflict with `/shops/category/{section}`. Ideally should help with JS improvements later with files separated, instead of loading every single one and doing the hide/show like before. NEEDS: implementation on brands, products, strains
* PANEL: FILTERS! Filter table view by category + structure for more easy filters.

##Minor Updates

* CSS: Pagination links fixed. Clicking only worked on numbers, not actual button.
* PANEL: Added back links to back buttons on edit/create/delete pages
* Removed CSS-only mobile sidebar menu and replaced with static bootstrap version.
* Added more links on Developers page.

## 1.9.9 (January 14, 2018)

##Major Updates

* GOOGLE ANALYTICS: Added to production site in footer.
* MODEL: Shops model featured image attribute changed to check for non-S3 URLs. If URL isn't S3, it returns URL without checking S3 storage. Fixed issue with checking each image on display using if/else statements and `strpos`.
* FIXED: Reviews in user dashboard showing wrong business/post name + link. Changed/refactored Reviews model and business method/attribute.

##Minor Updates

* Real star ratings and review count added to Shops archive component.
* FIXED: /advertise/ - Ad blocker was blocking image - changed URL from Ads -> Services. Made more mobile-friendly and responsive.
* FIXED: /how-it-works/ - Timeline line was offset - aligned with CSS
* FIXED: /register/ - wasn't 2 col - bootstrap CSS fix
* FIXED: Header nav - Buttons when logged out are now styled and aligned
* CSS: Added new button sub-classes: `.btn--outline` and `.btn--med`
* CSS: Set min/max heights for archive components (e.g. ShopArchive) for better grid

## 1.9.8 (January 13, 2018)

##Major Updates

* USER PROFILE PICS: Users can upload profile pictures in their settings, different than their avatar. Added to User model, use with `Auth::user()->userProfilePic`.
* Featured images for shops/brands/products/strains. Upload in admin panel, displays in archive view.

##Minor Updates

* MIGRATIONS: Added default and nullable values to original table migrations (shops, brands, etc) -- BUG FIX for admin creating new posts
* Bookmark counts fixed in some sections
* Featured and latest posts added to each section
* MIGRATIONS: Added table for categories relationships (cats to posts).
* ADMIN PANEL: Added featured img + avatar upload to create new posts
* ADMIN PANEL: Autogenerate slugs on new posts
* MIGRATIONS: Added table for strain reviews meta. 
* JOBS: Merged StrainReviewMeta with AddReview. Simply dispatch AddReview and add $meta array with meta values.


## 1.9.7 (January 10, 2018)

##Major Updates

* PANEL: Easy favorites! Table view for managing shops/etc now has featured star button to easily add/remove entries from favorites.
* Updated models with Favorite and Bookmark relationship. Shops::with('favorites', 'bookmarks').
* PANEL: Added image upload to Shops (avatar and featured img).
* Added domain to ENV file for purposes.
* Added Developer Controller for dev portal (kushy.net/developers/) - place to teach about API + sign up for keys
* Started designing Developer Portal index page (/developers/)
* Changed the way sidebars work - mobile friendly with CSS only magic.
* Featured shops and products used on Frontpage (NEEDS: check if n+1 problem exists with model relationship)

##Minor Updates

* Changed Favorites table migration and removed unique from item_id (caused problems with same ID from diff sections). Now, just make sure to check for pre-existing favorite before adding new to table.
* Updated Shops seeds with Amazon S3 URL.

## 1.9.6 (January 9, 2018)

##Major Updates

* Email: Layout template added for basic newsletter
* Refactor: AddReview and AddBookmark jobs created. Swapped code in all sections (shops, prods, etc).
* AddStrainReviewMeta job created. Handles inserting the extra strain review meta data into DB.
* Models: Haversine added to Shops model as location finder method. NEEDS to be added to all the other models + other functions (like nearby shops/products)
* ADMIN PANEL SEARCH!: Search by type (shops, etc), get table with paginated results.
* USER PROFILE: Added social media to settings and shows icons in sidebar.
* FEATURED POSTS!: Table+migration created for featured posts. Admin panel pages created to manage + add featured posts.

##Minor Updates

* Migration: Added phone number field to brands and shops
* Email: Finished user registration email
* Refactor: User dashboard now has Layout Template to extend from, and each section uses it now (settings, bookmarks, reviews).
* Search in header shows user inputted value on search page
* ADMIN PANEL: Inventory create JS autocomplete fixed. Was referencing local API instead of production.


## 1.9.5 (January 7, 2018)

##Major Updates

* User registration email started. Made job, email controller + view, and integrated into RegisterController. NEEDS: new HTML template
* Added new PHP Artisan Command for creating views- `php artisan make:view components.buttons.submit`
* Changed queue system to Amazon SQS and added details to dev and prod ENV files ++ ENV references to config/queue.php
* Added `*.env` to `.gitignore` to block ENV files from repo


## 1.9.4 (January 6, 2018)

##Minor Updates

* Added Flash status msg to bookmarks in major section controllers for single page methods (/strains/show/)
* Fixed bookmarks on user dashboard (headers were inline with bookmarks)


## 1.9.3 (January 6, 2018)

##Major Updates

* NEW PAGES: Terms of Use, Privacy Policy, Content Guidelines + added links to footer


## 1.9.2 (January 6, 2018)

##Major Updates

* EMAILS work. Dev with Mailtrap, and Production with AWS.
* Added contact form (/contact/)
* Added breadcrumb component. Added to each major section.
* Guests can't review or bookmark. Added Auth check on every review page + message to register. All buttons lead to register button. Ideally in future, we add bookmarks to session data and apply to activity table on register.
* Real numbers added to sections (shops, brands) for review + bookmark counts in sidebar
* Products added to brands
* ADMIN PANEL: Added Users + create user. Added Flash for status messages.
* ADMIN PANEL: Added basic index dashboard page (/panel/) with counts for each section.
* Added `->onDelete('cascade');` to every foreign key migration table. (Hopefully) fixes [the problem where you can't delete strains associated with flavors/effects/etc.](https://laravel.io/forum/06-10-2014-laravel-delete-query-exception-issue-please-help)
* Installed Amazon AWS SDK composer dep for Amazon SES in prod.
* Added Mailtrap credentials in dev ENV for development emails.

##Minor Updates

* Refactored LocationsController, fixed connection to Shops model
* Fixed Strains model, had dupe method
* Added small set of Strains seeds. Full version maxes out PHP RAM. In future make arrays and loop through to add, so we can add a sleep or wait function between SQL inserts.
* Added admin panel link to user dropdown

##New components

* Nav/Breadcrumbs: Send a $data var with an array of name as key and link as value (`['data' => [$link => $name]]`)
* Buttons/Bookmark: Send a section ('products') and post object (ie: $product).

## 1.9.1 (January 4, 2018)

##Major Updates

* User avatar upload now working with S3. Deletes old files on new upload. 
* Fixed image transfer issue. All images in DB changesd from old Wordpress directory to S3 bucket.

##Minor Updates

* Added migration for location lat+lng and social media JSON columns to user table
* Cache added for user avatar fetch from S3
* Admin Panel CSS changed from .Dashboard base to .Panel
* Admin sidebar menu changed, added create options + hover submenu + sticky submenu for selected pages
* Swapped Brands from DB to Eloquent
* Fixed user profile reviews - they show + link to reviewed business. Reviews eloquent model got new attribute method.

## 1.9.0 (January 4, 2018)

##Major Updates

* SOCIAL LOGIN: Google and Facebook. Social login service class expanded to any provider.
* AMAZON S3!: Storage can now be handled either locally (on EC2 server) - or on S3 Bucket. Installed a new composer plugin to support it, and added S3 details to ENV files.
* STATUS MESSAGES!: Installed Flash, a simple system to manage status messages. See readme for usage details.
* User avatar upload!

##Minor Updates

* User dashboard pages separated into different routes and views (/dashboard/settings/)
* Added social login options to Login page
* Linked social login buttons on frontpage ++ added check for logged in user, displays different CTA

## 1.8.8 (January 4, 2018)

##Major Updates

* SOCIAL LOGIN: Twitter enabled on development. Created new table/migration for Social Logins. Also new service class for checking for existing social logins.

##Minor Updates

* Fixed seed template dupes (NEEDS: refactoring to loops + variable unsets for efficient memory use)
* CSS: Fixed logo problem when search menu expanded.

## 1.8.7 (January 3, 2018)

##Minor Updates

* Added new seed template for strains + meta info
* Created strain taxonomies table + seed

## 1.8.7 (January 2, 2018)

##Minor Updates

* AWS! - Added ENV file for AWS production server and README.
* Minor CSS changes to user page menu and admin panel
* Fixed horizontal scrollbar issue.


## 1.8.5 (December 30, 2017)

##Minor Updates

* Added user activity table + model
* Added relationship between User and Reviews model
* Separate component for reviews with username (for everywhere) and with business info (for user profile)
* Fixed footer CSS

## 1.8.5 (December 30, 2017)

##Major Updates

* Fixed seeds. Added brands back to products. Added categories back to shops. Cleaned strains of dupes.
* Adding inventory now functioning (/panel/inventory/)
* Fixed admin panel views after db migration (changed to new fields) - panel works + edit

##Minor Updates

* Restructured Product page (closer to Sketch design)
* Added empty states to user reviews and bookmarks.
* Added components for displaying reviews and review sort/filter form.


## 1.8.0 (December 30, 2017)

##Major Updates

* API! - Added simple API controller (/api/v3/shops/)
* ADMIN!  - Added an admin panel to manage backend data (/panel/manage/shops/)
* SEEDS! - Database migrations and seeds working (mostly)

## 1.7.0 (December 28, 2017)

##Major Updates

* Fixed styles on single pages for mobile (brands/shops/etc)
* Moved new review form to review section (single page)
* Added models for each table
* Linked Users to Bookmarks (e.g. User::auth->strainsBookmarks)
* Bookmarks work for each section (brands/shops/etc)
* Created database seeds for Brands, Products, Shops, Strains, and a test user

##Minor Notes

* Added empty states for reviews and menus (single page)
* Added GET-based forms for review sorting on user dashboard
* Fixed search dropdown menu CSS (margin-bottom added)
* Styled user dropdown a bit more


## 1.6.0 (December 28, 2017)

##Major Updates

* Migrations added for most major tables
* Rough bookmark code started in single shop page

## Other Notes

* Tried installing Voyager admin and failed. Changed namespace to App, still didn't work, so changed it back to Kushy.


## 1.5.5 (December 17, 2017)

##Major Updates

* Removed sections routes from single pages (strains/{slug}/{section}) -- migrated logic to GET (/strains/{slug}/?section={section})
* Change password on user profile works with VALIDATOR!
* Strain profile page more complete. Working reviews(show + new) and pulls strain's products.
* Created `reviews_strains` table to bolster the regular reviews table with extra strain meta data.
* Changed the way archive components work (components/archive/strain) -- instead of passing data as section variable (like $strain->name), pass a generic $data->name object/variable
* Changed the way /search/ route works. Uses GET instead of POST.

##Minor Updates

* Added sub-menus to `/strains/` subcategories (type, flavor, etc) - `/components/nav/strain/`
* Fixed CSS on frontpage search CTA and social login
* Added popdown header search menu and vanilla JS to make it show/disappear
* Renamed the archive components (components/strain/archive) -> (components/strains/archive)

##New Routes
* /strains/flavor/{flavor}
* /strains/effects/{effect}
* /strains/ailment/{medical}

##Deprecated Routes
* /strains/{slug}/{section}
* /products/{slug}/{section}
* /brands/{slug}/{section}
* /shops/{slug}/{section}


## 1.5.0 (December 15, 2017)

##Major Updates

* REVIEWS! All sections except for strains have working reviews
* API -> SQL Migration
* Added haversine class for searching shops
* Pagination! -- Removed custom API version and replaced with Query Builder.
* Styled User Dashboard and added user's reviews + working account settings form (password not working)
* Added brand to product page

##Routes
* /dashboard/{section}/ - (Reviews, settings, bookmarks)

## 1.4.0 (December 14, 2017)

##Major Updates

HEROKU: Testing server live on [Heroku](http://kushy-frontend-laravel.herokuapp.com/)
* See README for more details on integration
* Added production and development environment files

## 1.3.0 (December 12, 2017)

##Major Updates

* Added pagination to brands, shops, products, and strains!
* REVIEWS! Posting reviews to shops works.

##Routes
* /california/{city}/
* /shops/{slug}/{section} - Static URLS for JS Menu
* /brands/
* /brands/{slug}
* /brands/category/{category}
* /brands/category/{category}/page/{page}
* /shops/category/{category}/page/{page}
* /products/category/{category}/page/{page}
* /strains/type/{type}/page/{page}
* /strains/type/{type}/ 
* /strains/{slug}/
* /strains/

## 1.2.0 (December 12, 2017)

##Major Updates

Added config file for cities. Access by using 
```php
use Illuminate\Support\Facades\Config;
$city_info = Config::get($config_uri);
echo $city_info->description;
echo $city_info->lat;
```

##Routes
* /shops/category/{category}
* /products/category/{category}

## 1.1.0 (December 11, 2017)

##Major Updates

* Added all static routes/pages from React. 
* Imported CSS as SASS. 
* Installed Bootstrap v4, removed references to bootstrap-sass (NEEDS uninstall)
* Added /shop/ route using Guzzle and API
* Roughly styled login/register pages
* Installed GeoIP to get user location data. See readme for instructions. NEEDS implementing sitewide.

##Routes
* / (frontpage)
* /shops/
* /shops/{slug}
* /products/
* /products/{slug}
* /dashboard/
* /login/
* /register/
* /california

**Database**
* Added port 3306 to `docker-compose.yml`
* Added `avatar` and `type` columns to `users` table.

## 1.0.0 (December 5, 2017)

Installed Laravel. Added Docker environment, see README for instructions.

Messing around with routes:
* Added routes: /shops/ and /shops/{slug}
* Added Controller: 'ShopsController'
* Added Views: /shops/index.blade.php + show