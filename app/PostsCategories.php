<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;

class PostsCategories extends Model
{
    protected $fillable = [
        'category_id',
        'post_id'
    ];

    /**
     * Hidden fields from basic Model and API requests
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * Automagically eager load any Model relationships
     *
     * @var array
     */
    protected $with = ['category'];
    
    /**
     * Get the post
     */
    public function post()
    {   
        return $this->belongsTo('KushyApi\Posts', 'post_id', 'id');
    }
    
    /**
     * Get the category
     */
    public function category()
    {   
        return $this->belongsTo('KushyApi\Categories', 'category_id', 'id');
    }
    
    /**
     * Get category name from relationship
     *
     * @return string
     */
    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }
}
