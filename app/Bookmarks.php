<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class Bookmarks extends Model
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
        'post_id',
        'user_id'
    ];


    /**
     * Get the user that owns the bookmark.
     */
    public function user()
    {
        return $this->belongsTo('KushyApi\User');
    }


    /**
     * Get the post that associated with the bookmark.
     */
    public function post()
    {
        return $this->belongsTo('KushyApi\Posts');
    }

    /**
     * Get the user activity that associated with the bookmark.
     */
    public function activity()
    {
        return $this->hasMany('KushyApi\UserActivity', 'post_id');
    }
}
