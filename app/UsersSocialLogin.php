<?php

namespace KushyApi;

use Illuminate\Database\Eloquent\Model;

class UsersSocialLogin extends Model
{
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];
    
    /**
     * Get the user that owns the social media account.
     */
    public function user()
    {
        return $this->belongsTo('KushyApi\User');
    }
}
