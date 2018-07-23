<?php

namespace KushyApi\Http\Middleware;

use Auth;
use Closure;

class Business
{
    /**
     * Verified user types for managing businesses
     *
     * @var array
     */
    private $userBusinessTypes = [
        'admin',
        'representative',
        'employee',
        'owner',
    ];


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() && in_array(Auth::user()->isType(), $this->userBusinessTypes) )
        {
            return $next($request);
        }

        return redirect('login');
    }
}
