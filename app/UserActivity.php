<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class UserActivity extends Model
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

    protected $table = 'user_activity';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'section', 
        'post_id',
        'item_id',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = [
        'user_id'          => 'string|required',
        'section'          => 'string|required',
        'post_id'          => 'string|required',
    ];

    /**
     * Get the user that owns the activity.
     */
    public function user()
    {
        return $this->belongsTo('KushyApi\User');
    }

    /**
     * Get the post that referenced in activity.
     */
    public function post()
    {
        return $this->belongsTo('KushyApi\Posts', 'post_id');
    }

    /**
     * Get the bookmark referenced in activity.
     */
    public function bookmarks()
    {
        return $this->belongsTo('KushyApi\Bookmarks', 'item_id');
    }

    /**
     * Get the review referenced in activity.
     */
    public function reviews()
    {
        return $this->belongsTo('KushyApi\Reviews', 'item_id');
    }
}
