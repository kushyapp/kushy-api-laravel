<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;
use Session;
use Storage;

class Images extends Model
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
        'image',
        'driver',
        'caption',
        'user_id',
        'post_id'
    ];
    
    /**
     * A cache to store session data like the CDN image URL
     *
     * @var array
     */
    private $cache = [];

    /**
     * Get the associated post
     */
    public function post()
    {   
        return $this->belongsTo('KushyApi\Posts', 'post_id', 'id');
    }

    /**
     * Get the associated user
     */
    public function user()
    {   
        return $this->belongsTo('KushyApi\User', 'user_id', 'id');
    }

    
    /**
     * Get's shop's featured img from DB and return S3 URL
     *
     * @return string
     */
    public function getGetImageAttribute()
    {
        /**
         * Grab if from the session if it exists
         */
        if(Session::get("images_".$this->id)) {
            return $this->cache['image'] = Session::get("images_".$this->id);
        } else {
            /**
             * Display image, or default placholder if no image exists
             */
            if($this->image)
            {
                $this->cache['image'] = Storage::disk('s3')->url($this->image);
                Session::put("images_".$this->id, $this->cache['image']);
                return $this->cache['image']; 
            } else {
                if (app()->env == 'local') {
                    return $this->cache['image'] = url('/') . '/assets/Icons/avatar-default-leaf.jpg';
                }
                return $this->cache['image'] = Storage::disk('s3')->url('assets/Icons/avatar-default-leaf.jpg');
            }
        }
    }

}
