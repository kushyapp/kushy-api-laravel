<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class Orders extends Model
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
        'shop_id',
        'user_id',
        'status',
        'total_price',
        'discount',
        'final_price'
    ];
    
    /**
     * Get the user
     */
    public function user()
    {   
        return $this->belongsTo('KushyApi\Users', 'user_id', 'id');
    }
    
    /**
     * Get the inventory
     */
    public function shop()
    {   
        return $this->belongsTo('KushyApi\Posts', 'shop_id', 'id');
    }

    /**
     * Get the order's items using the OrderItems model relationship
     */
    public function items()
    {   
        return $this->hasMany('KushyApi\OrderItems', 'order_id');
    }
}
