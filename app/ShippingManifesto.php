<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class ShippingManifesto extends Model
{
    /**
     * Generates and inserts uuid when creating new items
     */
    use Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipper_id',
        'shipper_state_license',
        'shipper_name',
        'shipper_address',
        'shipper_city',
        'shipper_state',
        'shipper_postal_code',
        'shipper_phone',
        
        'receiver_id',
        'receiver_state_license',
        'receiver_name',
        'receiver_address',
        'receiver_city',
        'receiver_state',
        'receiver_postal_code',
        'receiver_phone',
        'receiver_email',
        
        'distributor_id',
        'distributor_state_license',
        'distributor_name',
        'distributor_address',
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
        'digital_signature',

        'access_token',
    ];

    /**
     * Get the manifesto's products
     */
    public function products()
    {
        return $this->hasMany('KushyApi\ShippingItems', 'manifesto_id');
    }
    
    /**
     * Get the delivery driver model via relationship
     */
    public function delivery()
    {
        return $this->belongsTo('KushyApi\DeliveryDrivers', 'delivery_id', 'id');
    }



}
