<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreActivity;
use KushyApi\Http\Resources\UserActivity as UserActivityResource;
use KushyApi\Http\Resources\UserActivityCollection;
use KushyApi\UserActivity;

class ActivityController extends Controller
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
        $activity = QueryBuilder::for(UserActivity::class)
            ->whereStatus(true)
            ->whereIn('section', ['bookmarks', 'reviews', 'useful'])
            ->where('section', '<>', 'useful')
            ->allowedFilters([
                'user_id',
                'section',
                'item_id'
            ])
            ->allowedIncludes([
                'user', 
                'bookmarks', 
                'reviews', 
            ])
            ->paginate($config['query']['pagination']);

        return (new UserActivityCollection($activity))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivity $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $review = UserActivity::create($validated);

        return (new UserActivityResource($review))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = UserActivity::findOrFail($id);

        return (new UserActivityResource($review))
            ->response()
            ->setStatusCode(201);
    }

    public function user(Request $request)
    {
        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */
        $activity = QueryBuilder::for(UserActivity::class)
            ->whereStatus(true)
            ->whereIn('section', ['bookmarks', 'reviews', 'useful'])
            ->where('section', '<>', 'useful')
            ->where('user_id', $request->user()->id)
            ->allowedFilters([
                'section',
                'item_id'
            ])
            ->allowedIncludes([
                'bookmarks', 
                'reviews', 
            ])
            ->paginate($config['query']['pagination']);

        return (new UserActivityCollection($activity))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Grab the inventory item so we can update it
        $review = UserActivity::findOrFail($id);

        $review->fill($request->validated());
        
        return (new UserActivityResource($review))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserActivity::destroy($id);

        return response()->json([
            'code' => true,
            'status' => 'Successfully deleted the activity.'
        ]);
    }
}
