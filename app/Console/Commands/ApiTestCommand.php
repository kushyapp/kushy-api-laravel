<?php

namespace KushyApi\Console\Commands;

use Illuminate\Console\Command;
use File;

class ApiTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:test {name} {model} {endpoint} {--crud} {--states=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new API tests';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->option('crud')) {
            $name = $this->argument('name');
            $model = $this->argument('model');
            $endpoint = $this->argument('endpoint');

            $path = $this->testPath($name);

            $this->createDir($path);

            if (File::exists($path))
            {
                $this->error("Test {$path} already exists!");
                return;
            }

            $content = File::get(base_path('tests/Templates/CrudExampleTest.php'));


            $importPath = $this->importPath($name);
            if($importPath) {
                $name = $importPath['name'];
                $namespacePath = $importPath['path'];
                $namespace = "namespace Tests\Feature\\" . $namespacePath . ';';
                $content = str_replace('namespace Tests\Feature;', $namespace, $content);
            }

            /**
             * Search and replace all default content with command parameters
             */
            $searchReplace = [
                'CrudExampleTest' => $name,
                'Posts' => $model,
                'strains' => $endpoint,
            ];

            foreach($searchReplace as $search => $replace) {
                $content = str_replace($search, $replace, $content);
            }

            /**
             * Handle the "states" option - adds extra fields to model factory
             * $this->states('user, state, category')
             */
            if ($this->option('states')) {
                $stateReplace = $this->option('states');
            } else {
                $stateReplace = '';
            }
            $content = str_replace('addStates', $stateReplace, $content);


            File::put($path, $content);

            $this->info("Test {$path} created.");
        } else {
            $this->info("Did you want to make a CRUD test? Try re-running with the --crud flag.");
        }
    }

     /**
     * Get the test full path.
     *
     * @param string $view
     *
     * @return string
     */
    public function testPath($test)
    {
        $test = str_replace('.', '/', $test) . '.php';

        $path = "tests/Feature/{$test}";

        return $path;
    }

    /**
     * Splits the test name by slash ("/") 
     * and remove the last element (the test name)
     * to append it's parent folders to the Namespace
     *
     * @param [type] $test
     * @return void
     */
    public function importPath($test)
    {
        $test = explode('/', $test);
        $name = array_pop($test);
        $path = implode('\\', $test);

        return [
            'name' => $name,
            'path' => $path
        ];

    }

    /**
     * Create view directory if not exists.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);

        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }
}
