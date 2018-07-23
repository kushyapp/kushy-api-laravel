<?php
namespace KushyApi\Services;
use KushyApi\UsersSocialLogin;
use KushyApi\User;
use Laravel\Socialite\Contracts\User as ProviderUser;
class SocialAuthService
{
    public function createOrGetUser(ProviderUser $providerUser, $providerName)
    {
        // Grab user
        $account = UsersSocialLogin::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        // If users exists, return user account data
        if ($account) {
            return $account->user;
        } else {
            $account = new UsersSocialLogin([
                'provider_user_id' => $providerUser->getId(),
                'provider' =>  $providerName
            ]);
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                ]);
            }
            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}