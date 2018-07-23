<?php

namespace KushyApi;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use KushyApi\Traits\Uuids;
use Carbon\Carbon;
use Storage;
use Request;
use Session;

class User extends Authenticatable
{
    use Uuids, HasApiTokens, Notifiable;

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
        'name', 
        'email', 
        'password',
        'avatar',
        'profile_pic',
        'drivers_license',
        'doctors_rec',
        'latitude',
        'longitude',
        'social',
        'billing_first_name',
        'billing_last_name',
        'billing_address',
        'billing_city',
        'billing_country',
        'billing_state',
        'billing_postal_code',
        'billing_phone',

        'shipping_first_name',
        'shipping_last_name',
        'shipping_address',
        'shipping_city',
        'shipping_country',
        'shipping_state',
        'shipping_postal_code',
        'shipping_phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'email', 
        'password', 
        'remember_token', 
        'type',
        'verified',
        'drivers_license',
        'doctors_rec',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'billing_first_name',
        'billing_last_name',
        'billing_address',
        'billing_city',
        'billing_country',
        'billing_state',
        'billing_postal_code',
        'billing_phone',

        'shipping_first_name',
        'shipping_last_name',
        'shipping_address',
        'shipping_city',
        'shipping_country',
        'shipping_state',
        'shipping_postal_code',
        'shipping_phone',
    ];


    /**
     * A cache to store session data like avatar or location
     *
     * @var array
     */
    private $cache = [];

    /**
     * A list of user types allowed to access business sections
     *
     * @var array
     */
    private $businessTypes = [
        'admin',
        'representative',
        'employee',
        'owner',
    ];


    /**
     * Checks if user is allowed to access business sections
     *
     * @return string
     */
    public function getIsBusinessAttribute()
    {
        if ( in_array($this->type, $this->businessTypes) )
        {
            return true; 
        }
        else
        {
            return false;
        }
    }

    /**
     * Checks if user is allowed to access administrative sections
     *
     * @return string
     */
    public function getIsAdminAttribute()
    {
        if ( $this->type == 'admin' )
        {
            return true; 
        }
        else
        {
            return false;
        }
    }

    /**
     * Get's user type (admin, customer, etc)
     *
     * @return string
     */
    public function isType()
    {
        return $this->type; // this looks for a user type column in your users table
    }

    /**
     * Get's user social media accounts and return JSON decoded
     *
     * @return string
     */
    public function getDecodeSocialAttribute()
    {
        return json_decode($this->social);
    }

    /**
     * Get's user avatar from DB and return S3 URL
     * 
     * Usage: $user->userAvatar
     *
     * @return string
     */
    public function getUserAvatarAttribute()
    {
        if(array_key_exists('avatar', $this->cache)) {
            return $this->cache['avatar'];
        } else {
            if($this->avatar)
            {
                $this->cache['avatar'] = Storage::disk('s3')->url($this->avatar);
                Session::put("avatar", $this->cache['avatar']);
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
     * Get's user profile pic from DB and return S3 URL
     * 
     * Usage: $user->userProfilePic
     *
     * @return string
     */
    public function getUserProfilePicAttribute()
    {
        if(array_key_exists('profile_pic', $this->cache)) {
            return $this->cache['profile_pic'];
        } else {
            $this->cache['profile_pic'] = Storage::disk('s3')->url($this->profile_pic);
            Session::put("profile_pic", $this->cache['profile_pic']);
            return $this->cache['profile_pic']; 
        }
    }


    /**
     * Get's user driver's license from DB and return S3 URL
     * Since image is private, temp URL is generated
     * 
     * Usage: $user->userDriversLicense
     *
     * @return string
     */
    public function getUserDriversLicenseAttribute()
    {
        if(array_key_exists('drivers_license', $this->cache)) {
            return $this->cache['drivers_license'];
        } else {
            $this->cache['drivers_license'] = Storage::disk('s3')->temporaryUrl($this->drivers_license, Carbon::now()->addMinutes(5));
            Session::put("drivers_license", $this->cache['drivers_license']);
            return $this->cache['drivers_license']; 
        }
    }


    /**
     * Get's user doctor's rec from DB and return S3 URL
     * Since image is private, temp URL is generated
     * 
     * Usage: $user->userDoctorsRec
     *
     * @return string
     */
    public function getUserDoctorsRecAttribute()
    {
        if(array_key_exists('doctors_rec', $this->cache)) {
            return $this->cache['doctors_rec'];
        } else {
            $this->cache['doctors_rec'] = Storage::disk('s3')->temporaryUrl($this->doctors_rec, Carbon::now()->addMinutes(5));
            Session::put("doctors_rec", $this->cache['doctors_rec']);
            return $this->cache['doctors_rec']; 
        }
    }

    /**
     * Get the comments for the blog post.
     */
    public function reviews()
    {
        return $this->hasMany('KushyApi\Reviews', 'user_id');
    }

    /**
     * Get the user's bookmarked shops
     */
    public function bookmarksShops()
    {
        return $this->belongsToMany('KushyApi\Shops', 'bookmarks', 'user_id', 'item_id')
                    ->where('section', 'shops');
    }

    /**
     * Get the user's bookmarked strains
     */
    public function bookmarksStrains()
    {
        return $this->belongsToMany('KushyApi\Strains', 'bookmarks', 'user_id', 'item_id')
                    ->where('section', 'strains');
    }

    /**
     * Get the user's bookmarked products
     */
    public function bookmarksProducts()
    {
        return $this->belongsToMany('KushyApi\Products', 'bookmarks', 'user_id', 'item_id')
                    ->where('section', 'products');
    }

    /**
     * Get the user's bookmarked brands
     */
    public function bookmarksBrands()
    {
        return $this->belongsToMany('KushyApi\Brands', 'bookmarks', 'user_id', 'item_id')
                    ->where('section', 'brands');
    }

    /**
     * Get the bookmarks
     */
    public function bookmarks()
    {
        return $this->hasMany('KushyApi\Bookmarks', 'user_id');
    }

    /**
     * Get the social login info for user
     */
    public function socialLogin()
    {
        return $this->hasOne('KushyApi\UsersSocialLogin', 'user_id');
    }

    /**
     * Get items from orders that contain this product
     */
    public function orders()
    {
        return $this->hasMany('KushyApi\Orders', 'user_id');
    }

    /**
     * Get items from orders that contain this product
     */
    public function carts()
    {
        return $this->hasMany('KushyApi\Carts', 'user_id');
    }
}
