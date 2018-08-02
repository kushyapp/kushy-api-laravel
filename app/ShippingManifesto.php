<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;

class ShippingManifesto extends Model
{
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
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = [
        'shipper_id' => 'string|required',
        'shipper_state_license' => 'string|required',
        'shipper_name' => 'string|required',
        'shipper_address' => 'string|required',
        'shipper_city' => 'string|required',
        'shipper_state' => 'string|required',
        'shipper_postal_code' => 'string|required',
        'shipper_phone' => 'numeric|required',

        'receiver_id' => 'string|required|exists:posts,id',
        'receiver_state_license' => 'string|required',
        'receiver_name' => 'string|required',
        'receiver_address' => 'string|required',
        'receiver_city' => 'string|required',
        'receiver_state' => 'string|required',
        'receiver_postal_code' => 'string|required',
        'receiver_phone' => 'numeric|required',
        'receiver_email' => 'email|required',

        'distributor_id' => 'string|required|exists:posts,id',
        'distributor_state_license' => 'string|required',
        'distributor_name' => 'string|required',
        'distributor_address' => 'string|required',
        'distributor_city' => 'string|required',
        'distributor_state' => 'string|required',
        'distributor_postal_code' => 'string|required',
        'distributor_phone' => 'numeric|required',
        'distributor_email' => 'email|required',

        // @todo: when delivery drivers are implemented, uncomment below and delete dupe param
        // 'delivery_id' => 'string|required|exists:delivery_drivers,id',
        'delivery_id' => 'string|required',
        'owner_id' => 'string|required',
        'invoice' => 'string|required',
        'status' => 'string|required',
        'description' => 'string|required',
        'contact_name' => 'string|required',
        'phone' => 'numeric|required',
        'date_departure' => 'date|required',
        'date_estimated_arrival' => 'date|required',
        'date_actual_arrival' => 'date|required',
        'date_signed' => 'date|required',
        'digital_signature' => 'string|required',
    ];

    /**
     * Add an access token when creating new manifestos
     * ++ Generates and inserts uuid when creating new items
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
            $model->access_token = md5(date("F j, Y, g:i a"));
        });
    }

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
