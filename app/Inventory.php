<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class Inventory extends Model
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
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory';

    /**
     * The allowed fields insertable into the DB by forms/arrays
     *
     * @var string
     */
    protected $fillable = [
        'product_id', 
        'business_id', 
        'section', 
        'description', 
        'list_price', 
        'sale_price', 
        'thc', 
        'cbd', 
        'cbn',
        'status',
        'stock',
        'half_gram',
        'one_gram',
        'two_grams',
        'eighth_ounce',
        'quarter_ounce',
        'half_ounce',
        'ounce',
        'quarter_pound',
        'half_pound',
        'pound'
    ];

    /**
     * Get the product
     */
    public function product()
    {
        return $this->belongsTo('KushyApi\Posts', 'product_id', 'id');
    }

    /**
     * Get the business
     */
    public function business()
    {
        return $this->belongsTo('KushyApi\Posts', 'business_id', 'id');
    }

    /**
     * Get items from orders that contain this product
     */
    public function purchases()
    {
        return $this->hasMany('KushyApi\OrderItems', 'inventory_id');
    }

    /**
     * Get carts that contain this product
     */
    public function carts()
    {
        return $this->hasMany('KushyApi\Carts', 'inventory_id');
    }

}
