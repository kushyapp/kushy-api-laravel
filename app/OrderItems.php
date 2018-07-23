<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class OrderItems extends Model
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
    

    protected $fillable = [
        'order_id',
        'inventory_id',
        'product_type',
        'count',
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
    public function order()
    {   
        return $this->belongsTo('KushyApi\Orders', 'order_id', 'id');
    }
    
    /**
     * Get the inventory product (inventory item from shops menu, not a "product")
     */
    public function inventory()
    {   
        return $this->belongsTo('KushyApi\Inventory', 'inventory_id', 'id');
    }
}
