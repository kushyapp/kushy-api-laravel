<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;

class StrainsTaxonomies extends Model
{
    protected $fillable = [
        'meta_type',
        'name',
        'slug',
    ];
}
