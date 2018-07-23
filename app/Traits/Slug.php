<?php
namespace KushyApi\Traits;

trait Slug
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = title_case($model->name);
        });
    }
}