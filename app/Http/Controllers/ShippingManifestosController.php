<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Requests\StoreCarts;
use KushyApi\Http\Resources\ShippingManifestos as ShippingManifestosResource;
use KushyApi\Http\Resources\ShippingManifestosCollection;
use KushyApi\Http\Controllers\ApiController;
use KushyApi\ShippingManifesto;

class ShippingManifestosController extends ApiController
{
    /**
     * Section name to be displayed when deleting items
     *
     * @var string
     */
    protected $section = 'shipping manifesto';

    /**
     * The model to use when querying/deleting
     *
     * @var [type]
     */
    protected $model = ShippingManifesto::class;

    /**
     * Relationships to allow users to include in queries
     *
     * @var array
     */
    protected $includes = [
        'products',
        'delivery',
    ];

    /**
     * Allowed filters for users 
     *
     * @var array
     */
    protected $filters = [
        'shipper_id',
        'shipper_state_license',
        'shipper_name',
        'shipper_city',
        'shipper_state',
        'shipper_postal_code',
        'shipper_phone',
        
        'receiver_id',
        'receiver_state_license',
        'receiver_name',
        'receiver_city',
        'receiver_state',
        'receiver_postal_code',
        'receiver_phone',
        'receiver_email',
        
        'distributor_id',
        'distributor_state_license',
        'distributor_name',
        'distributor_city',
        'distributor_state',
        'distributor_postal_code',
        'distributor_phone',
        'distributor_email',

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
    ];

    /**
     * API Resource collection
     *
     * @var [type]
     */
    protected $resourceCollection = ShippingManifestosCollection::class;
    
    /**
     * API Resource
     *
     * @var [type]
     */
    protected $resource = ShippingManifestosResource::class;
}
