<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Our faker instance
     *
     * @var
     */
    protected $faker;

    public function setUp(){
        parent::setUp();
        /*
         * Set up faker
         */
        $this->faker = \Faker\Factory::create();
    }
}
