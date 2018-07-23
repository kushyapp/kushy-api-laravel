<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class Carts extends Model
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
        'shop_id',
        'user_id',
    ];
    
    /**
     * Get the user
     */
    public function user()
    {   
        return $this->belongsTo('KushyApi\Users', 'user_id', 'id');
    }
    
    /**
     * Get the related shop using the Posts model
     */
    public function shop()
    {   
        return $this->belongsTo('KushyApi\Posts', 'shop_id', 'id');
    }

    /**
     * Get the related shop using the Posts model
     */
    public function items()
    {   
        return $this->hasMany('KushyApi\CartItems', 'cart_id');
    }
}
