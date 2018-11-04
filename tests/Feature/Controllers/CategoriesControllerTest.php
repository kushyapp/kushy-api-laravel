<?php

namespace Tests\Feature\Controllers;

use Tests\CrudTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoriesControllerTest extends CrudTest
{
    /**
     * The model to use when creating dummy data
     *
     * @var class
     */
    protected $model = \KushyApi\Categories::class;

    /**
     * The endpoint to query in the API
     * e.g = /api/v1/<endpoint>
     *
     * @var string
     */
    protected $endpoint = 'categories';

    /**
     * Any additional "states" to add to factory
     *
     * @var string
     */
    protected $states = '';

    /**
     * Extra data to pass to POST endpoint 
     * aka the (store() method)
     * 
     * Must be array (ends up merged with another)
     *
     * @var array
     */
    protected $store = [
    ]; 

    /**
     * The structure of the JSON response from collections
     * Tests assert the response against this array
     *
     * @var array
     */
    protected $collectionStructure = [
        'data' => [
            [
                'id',
                'name',
                'slug',
                'section',
                'includes',
            ],
        ],
        'links' => [
            'self'
        ]
    ];

    /**
     * The structure of the JSON response from a single resource
     * Tests assert the response against this array
     *
     * @var array
     */
    protected $resourceStructure = [
        'data' => [
            'id',
            'name',
            'slug',
            'section',
        ],
    ];


    /**
     * POST /endpoint/
     *
     * @return void
     */
    public function testStore()
    {
        $activity = $this->createPost();
        $activity = $activity->toArray();

        /**
         * Pass in any extra data
         */
        if($this->store)
        {
            $activity = array_merge($activity, $this->store);
        }

        $response = $this->json('POST', "api/v1/{$this->endpoint}/", $activity);
        ($this->model)::destroy($activity['id']);
        dd($response);

        $response
            ->assertStatus(201)
            ->assertJsonStructure($this->resourceStructure);
    }
}
