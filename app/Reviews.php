<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class Reviews extends Model
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
        'user_id', 
        'post_id', 
        'review',
        'rating',
    ];


    /**
     * Get the user that owns the review.
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
     * Get the post that associated with the bookmark.
     */
    public function strainMeta()
    {
        return $this->hasMany('KushyApi\ReviewsStrains', 'review_id');
    }

    /**
     * Get the user activity that associated with the review.
     */
    public function activity()
    {
        return $this->hasMany('KushyApi\UserActivity', 'post_id');
    }

}
