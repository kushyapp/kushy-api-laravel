<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
     * Fields fillable by forms
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'section',
        'parent',
    ];

    /**
     * Disable Eloquent's enforced timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Hooks into when model creates new resource
     * We generate a slug for the category name 
     * and check if it's unique
     */
    public static function boot()
    {
        self::creating(function($category) {

            // produce a slug based on the activity title
            $slug = Str::slug($category->name);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $category->slug = $count ? "{$slug}-{$count}" : $slug;

        });
    }
    
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
