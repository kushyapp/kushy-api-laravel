<?php

namespace Tests\Feature\Controllers;

use Tests\CrudTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShippingManifestosControllerTest extends CrudTest
{
    /**
     * The model to use when creating dummy data
     *
     * @var class
     */
    protected $model = \KushyApi\ShippingManifesto::class;

    /**
     * The endpoint to query in the API
     * e.g = /api/v1/<endpoint>
     *
     * @var string
     */
    protected $endpoint = 'manifestos';

    /**
     * Any additional "states" to add to factory
     *
     * @var string
     */
    protected $states = 'processing';

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

    protected $collectionStructure = [
        'data' => [
            [
                'id',

                'shipper' => [
                    'id',
                    'state_license',
                    'name',
                    'address',
                    'city',
                    'state',
                    'postal_code',
                    'phone',

                ],
                'receiver' => [
                    'id',
                    'state_license',
                    'name',
                    'address',
                    'city',
                    'state',
                    'postal_code',
                    'phone',
                    'email',

                ],
                'distributor' => [
                    'id',
                    'state_license',
                    'name',
                    'address',
                    'city',
                    'state',
                    'postal_code',
                    'phone',
                    'email',
                ],

                'delivery_id',
                'owner_id',
                'invoice',
                'status',
                'description',
                'contact_name',
                'phone',
                'date_departure',
                'date_estimated_arrival',
                'date_actual_arrival',
                'date_signed',
                'digital_signature',

                'access_token',
                'includes',
            ],
        ],
        'links' => [
            'self'
        ]
    ];

    protected $resourceStructure = [
        'data' => [
            'id',

            'shipper' => [
                'id',
                'state_license',
                'name',
                'address',
                'city',
                'state',
                'postal_code',
                'phone',

            ],
            'receiver' => [
                'id',
                'state_license',
                'name',
                'address',
                'city',
                'state',
                'postal_code',
                'phone',
                'email',

            ],
            'distributor' => [
                'id',
                'state_license',
                'name',
                'address',
                'city',
                'state',
                'postal_code',
                'phone',
                'email',
            ],

            'delivery_id',
            'owner_id',
            'invoice',
            'status',
            'description',
            'contact_name',
            'phone',
            'date_departure',
            'date_estimated_arrival',
            'date_actual_arrival',
            'date_signed',
            'digital_signature',

            'access_token',
        ],
    ];
}
