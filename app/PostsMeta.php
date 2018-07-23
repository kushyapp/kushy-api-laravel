<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;

class PostsMeta extends Model
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


    protected $table = 'posts_meta';

    protected $fillable = [
        'post_id',
        'meta_name',
        'meta_value'
    ];

    /**
     * Get the user that owns the review.
     */
    public function post()
    {
        return $this->belongsTo('KushyApi\Posts', 'post_id');
    }

}
