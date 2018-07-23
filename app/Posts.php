<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;
use KushyApi\Traits\Uuids;
use Storage;
use Session;

class Posts extends Model
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
        'name',
        'slug',
        'section',
        'email',
        'featured_img',
        'avatar',
        'description',
        'latitude',
        'longitude',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'rating',
        'social',
        'featured',
        'verified',
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
     * A cache to store session data like avatar or location
     *
     * @var array
     */
    private $cache = [];


    /**
     * Get the reviews
     */
    public function reviews()
    {
        return $this->hasMany('KushyApi\Reviews', 'post_id');
    }

    /**
     * Get the bookmarks
     */
    public function bookmarks()
    {
        return $this->hasMany('KushyApi\Bookmarks', 'post_id');
    }

    /**
     * Get the category
     */
    public function categories()
    {
        return $this->hasMany('KushyApi\PostsCategories', 'post_id');
    }

    /**
     * Get the category
     */
    public function meta()
    {
        return $this->hasMany('KushyApi\PostsMeta', 'post_id');
    }

    /**
     * PRODUCTS: Get the associated brand
     */
    public function brand()
    {
        return $this->hasMany('KushyApi\PostsRelationships', 'post_id');
    }

    /**
     * Get child posts (relationship where this is the parent)
     * Strains might have children
     * Posts have children to relate deals
     */
    public function children()
    {
        return $this->hasMany('KushyApi\PostsRelationships', 'parent_id');
    }


    /**
     * Get users who have permission to manage the post
     */
    public function owners()
    {
        return $this->hasMany('KushyApi\UsersPermissions', 'business_id');
    }
    /**
     * Get the reviews
     */
    public function images()
    {
        return $this->hasMany('KushyApi\Images', 'post_id');
    }
    /**
     * Get the reviews
     */
    public function inventory()
    {
        return $this->hasMany('KushyApi\Inventory', 'business_id');
    }




    /**
     * Get's shop's avatar from DB and return S3 URL
     *
     * @return string
     */
    public function getGetAvatarAttribute()
    {
        if(Session::get("avatar_".$this->id)) {
            return $this->cache['avatar'] = Session::get("avatar_".$this->id);
        } else {
            if($this->avatar)
            {
                $this->cache['avatar'] = Storage::disk('s3')->url($this->avatar);
                Session::put("avatar_".$this->id, $this->cache['avatar']);
                return $this->cache['avatar']; 
            } else {
                if (app()->env == 'local') {
                    return $this->cache['avatar'] = url('/') . '/assets/Icons/avatar-default-leaf.jpg';
                }
                return $this->cache['avatar'] = Storage::disk('s3')->url('assets/Icons/avatar-default-leaf.jpg');
            }
        }
    }


    /**
     * Get's shop's featured img from DB and return S3 URL
     *
     * @return string
     */
    public function getGetFeaturedImageAttribute()
    {
        if(Session::get("featured_img_".$this->id)) {
            return $this->cache['featured_img'] = Session::get("featured_img_".$this->id);
        } else {
            if($this->featured_img)
            {
                $this->cache['featured_img'] = Storage::disk('s3')->url($this->featured_img);
                Session::put("featured_img_".$this->id, $this->cache['featured_img']);
                return $this->cache['featured_img']; 
            } else {
                if (app()->env == 'local') {
                    return $this->cache['featured_img'] = url('/') . '/assets/Icons/avatar-default-leaf.jpg';
                }
                return $this->cache['featured_img'] = Storage::disk('s3')->url('assets/Icons/avatar-default-leaf.jpg');
            }
        }
    }


    /**
     * Get the number of shop reviews
     *
     * @return integer
     */
    public function getReviewCountAttribute()
    {
        return count($this->reviews);
    }


    /**
     * Get the number of shop reviews
     *
     * @return integer
     */
    public function getReviewAverageAttribute()
    {
        $total = 0;
        $count = 0;

        foreach($this->reviews as $review) {
            $total = $total + $review->rating;
            $count++;
        }
        
        /** Average the review ratings
         * and check for 0, cause you can't divide by zero
         */
        if($total == 0 || $count == 0) {
            $average = 0;
        } else {
            $average = round($total/$count);
        }
        
        return $average;
    }

    public function getHoursAttribute()
    {
        $hoursMetaNames = [
            'sunday_open' => 'Sunday',
            'sunday_closed' => 'Sunday',
            'monday_open' => 'Monday',
            'monday_closed' => 'Monday',
            'tuesday_open' => 'Tuesday',
            'tuesday_closed' => 'Tuesday',
            'wednesday_open' => 'Wednesday',
            'wednesday_closed' => 'Wednesday',
            'thursday_open' => 'Thursday',
            'thursday_closed' => 'Thursday',
            'friday_open' => 'Friday',
            'friday_closed' => 'Friday',
            'saturday_open' => 'Saturday',
            'saturday_closed' => 'Saturday',
        ];

        // Get hours of operation from post meta
        // and map into new, easier to compose array
        $hours = [
            'Sunday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
            'Monday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
            'Tuesday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
            'Wednesday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
            'Thursday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
            'Friday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
            'Saturday' => [
                'open' => 'Closed',
                'closed' => 'Closed',
            ],
        ];
        foreach($this->meta as $meta)
        {
            if(array_key_exists($meta->meta_name, $hoursMetaNames))
            {
                if(strpos($meta->meta_name, 'open'))
                {
                    // $hours['thursday']['open']
                    $hours[$hoursMetaNames[$meta->meta_name]]['open'] = date('g:i a', strtotime($meta->meta_value));
                } elseif(strpos($meta->meta_name, 'closed')) {
                    $hours[$hoursMetaNames[$meta->meta_name]]['closed'] = date('g:i a', strtotime($meta->meta_value));
                }
            }
        }
        
        return $hours;
    }

    /**
     *  find the n closest locations
     *  @param float $lat latitude of the point of interest
     *  @param float $lng longitude of the point of interest
     *  @param integer $max_distance max distance to search our from
     *  @param integer $max_locations max number of locations to return
     *  @param string $units miles|kilometers
     *  @return array
     **/
    public function scopeLocation($query, $lat, $lng, $search = null, $max_distance = 25, $max_locations = 10, $units = 'miles')
    {
        /*
            *  Allow for changing of units of measurement
            */
        switch ( $units ) {
            default:
            case 'miles':
                //radius of the great circle in miles
                $gr_circle_radius = 3959;
            break;
            case 'kilometers':
                //radius of the great circle in kilometers
                $gr_circle_radius = 6371;
            break;
        }

        return $query = Posts::select("posts.*")
            ->selectRaw('( 6371 * acos( cos( radians(?) ) *
                               cos( radians( latitude ) )
                               * cos( radians( longitude ) - radians(?)
                               ) + sin( radians(?) ) *
                               sin( radians( latitude ) ) )
                             ) AS distance', [$lat, $lng, $lat])
            ->havingRaw("distance < ?", [$gr_circle_radius])
            ->take( $max_locations )
            ->orderBy( 'distance', 'ASC' )
            ->get();
    }


    /**
     * Get nearby shops based on current shop's lat/lng
     * 
     */

    public function getNearbyShopsAttribute($radius = 10) {
        return Posts::select('posts.*')
            ->selectRaw('( 6371 * acos( cos( radians(?) ) *
                               cos( radians( latitude ) )
                               * cos( radians( longitude ) - radians(?)
                               ) + sin( radians(?) ) *
                               sin( radians( latitude ) ) )
                             ) AS distance', [$this->location_lat, $this->lng, $this->location_lat])
            ->havingRaw("distance < ?", [$radius])
            ->get();
    }

}
