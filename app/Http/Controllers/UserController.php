<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreUser;
use KushyApi\Http\Requests\UpdateUser;
use KushyApi\Http\Resources\Users as UsersResource;
use KushyApi\Http\Resources\UsersCollection;
use KushyApi\User;

class UserController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::get('api');

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */

        $users = QueryBuilder::for(User::class)
            ->allowedFilters([
                'post_id', 
                'user_id', 
                'rating', 
                'review'
            ])
            ->allowedIncludes([
                'user', 
                'post', 
                'strainMeta'
            ])
            ->paginate($config['query']['pagination']);

        return (new UsersCollection($users))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($request['password']);

        $user = User::create($validated);

        return (new UsersResource($user))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return (new UsersResource($user))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        $user = User::find($id);

        $user->fill($request->validated());

        return (new UsersResource($user))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return response()->json([
            'code' => true,
            'response' => 'Successfully deleted user.'
        ]);
    }


    /**
     * Get profile of current logged in user
     *
     * @param Request $request
     * @return void
     */
    public function profile(Request $request) {

        $user = $request->user();

        if ($user->tokenCan('access-email')) {
            $user->makeVisible('email');
        }

        if ($user->tokenCan('access-patient-status')) {
            $user->makeVisible('verified');
        }


        if ($user->tokenCan('access-user-account')) {
            $user->makeVisible('email'); 
            $user->makeVisible('type');
            $user->makeVisible('verified');
            $user->makeVisible('drivers_license');
            $user->makeVisible('doctors_rec');
            $user->makeVisible('address');
            $user->makeVisible('city');
            $user->makeVisible('state');
            $user->makeVisible('postal_code');
            $user->makeVisible('country');
            $user->makeVisible('billing_first_name');
            $user->makeVisible('billing_last_name');
            $user->makeVisible('billing_address');
            $user->makeVisible('billing_city');
            $user->makeVisible('billing_country');
            $user->makeVisible('billing_state');
            $user->makeVisible('billing_postal_code');
            $user->makeVisible('billing_phone');

            $user->makeVisible('shipping_first_name');
            $user->makeVisible('shipping_last_name');
            $user->makeVisible('shipping_address');
            $user->makeVisible('shipping_city');
            $user->makeVisible('shipping_country');
            $user->makeVisible('shipping_state');
            $user->makeVisible('shipping_postal_code');
            $user->makeVisible('shipping_phone');
        }

        return response()
            ->json($user)
            ->setStatusCode(200);
    }
}
