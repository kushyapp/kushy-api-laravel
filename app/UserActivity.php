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
        'item_id'          => 'string|required',
    ];

    /**
     * Get the user that owns the review.
     */
    public function user()
    {
        return $this->belongsTo('KushyApi\User');
    }

    /**
     * Get the user that owns the review.
     */
    public function bookmarks()
    {
        return $this->belongsTo('KushyApi\Bookmarks', 'item_id');
    }

    /**
     * Get the user that owns the review.
     */
    public function reviews()
    {
        return $this->belongsTo('KushyApi\Reviews', 'item_id');
    }
}
