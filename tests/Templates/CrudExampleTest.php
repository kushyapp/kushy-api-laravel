<?php

namespace Tests\Feature;

use Tests\CrudTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudExampleTest extends CrudTest
{
    /**
     * The model to use when creating dummy data
     *
     * @var class
     */
    protected $model = \KushyApi\Posts::class;

    /**
     * The endpoint to query in the API
     * e.g = /api/v1/<endpoint>
     *
     * @var string
     */
    protected $endpoint = 'strains';

    /**
     * Any additional "states" to add to factory
     *
     * @var string
     */
    protected $states = 'addStates';

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
        ],
    ];
}
