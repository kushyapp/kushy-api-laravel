<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class PostsRelationships extends Model
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
        'parent_id',
    ];

    /**
     * Automagically eager load any Model relationships
     *
     * @var array
     */
    protected $with = ['post', 'parent'];

    public $timestamps = false;

    /**
     * Get the original post
     */
    public function post()
    {
        return $this->belongsTo('KushyApi\Posts', 'post_id');
    } 

    /**
     * Get the parent post
     */
    public function parent()
    {
        return $this->belongsTo('KushyApi\Posts', 'parent_id');
    }
}
