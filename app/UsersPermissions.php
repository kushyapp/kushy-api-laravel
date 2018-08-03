<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class UsersPermissions extends Model
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
        'business_id',
        'user_id',
        'verified',
        'user_type',
        'permissions',
    ];

    protected $business;

    
    /**
     * Get the post
     */
    public function post()
    {   
        return $this->belongsTo('KushyApi\Posts', 'business_id', 'id');
    }

    /**
     * Get the user from the claim.
     */
    public function user()
    {
        return $this->belongsTo('KushyApi\User', 'user_id');
    }
}
