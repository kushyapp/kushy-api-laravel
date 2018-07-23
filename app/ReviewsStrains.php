<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class ReviewsStrains extends Model
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
        'review_id', 
        'meta_key', 
        'meta_value',
    ];



    /**
     * Get the review associated with the strain meta data.
     */
    public function review()
    {
        return $this->belongsTo('KushyApi\Reviews');
    }


    /**
     * Get the strain taxonomy associated with the strain meta value.
     */
    public function meta()
    {
        return $this->belongsTo('KushyApi\StrainsTaxonomies', 'meta_value');
    }
}
