<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class CartItems extends Model
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
     * Hidden fields from basic Model and API requests
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    protected $fillable = [
        'inventory_id',
        'cart_id',
    ];

    /**
     * Automagically eager load any Model relationships
     *
     * @var array
     */
    protected $with = ['inventory'];
    
    /**
     * Get the user
     */
    public function cart()
    {   
        return $this->belongsTo('KushyApi\Carts', 'cart_id', 'id');
    }
    
    /**
     * Get the inventory
     */
    public function inventory()
    {   
        return $this->belongsTo('KushyApi\Inventory', 'inventory_id', 'id');
    }
}
