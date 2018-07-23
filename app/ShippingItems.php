<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class ShippingItems extends Model
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
        'manifesto_id',
        'product_id',
        'uid_tag',
        'qty_ordered',
        'qty_received',
        'unit_cost',
        'total_cost',
        'unit_retail_price',
        'total_retail_price',
        'rejected',
        'description',
    ];
}
