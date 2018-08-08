<?php

namespace KushyApi\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'KushyApi\Model' => 'KushyApi\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Passport::routes();
        /** 
         * Forces API tokens to expire in 15 days
         */
        Passport::tokensExpireIn(now()->addDays(15));

        Passport::refreshTokensExpireIn(now()->addDays(30));

        /**
         * Set Passport Scopes
         * These create permissions across the API
         * Check the staff docs for each scopes permissions
         */
        Passport::tokensCan([
            'access-email' => 'Access user email',
            'access-patient-status' => 'Access patient verification status',
            'access-patient-data' => "Access patient's driver's license and medical marijuana recommendation.",
            'access-user-account' => "Access and control your user account information (email, location data, billing/shipping details)",
        ]);
    }
}
