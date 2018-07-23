<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * Hidden fields from basic Model and API requests
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    /**
     * Get the category relationship
     */
    public function relationships()
    {
        return $this->hasMany('KushyApi\PostsCategories', 'id', 'category_id');
    }
    
    /**
     * Get the category relationship
     */
    public function parents()
    {
        return $this->belongsTo('KushyApi\Categories', 'parent', 'id');
    }
}
