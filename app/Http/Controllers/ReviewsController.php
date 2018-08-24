<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\QueryBuilder\QueryBuilder;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Requests\StoreReviews;
use KushyApi\Http\Resources\Reviews as ReviewsResource;
use KushyApi\Http\Resources\ReviewsCollection;
use KushyApi\Reviews;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show', 'post']]);
        $this->middleware('admin', ['except' => ['index', 'show', 'post']]);
    }
    
    /**
     * Display a paginated archive of all reviews
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

        $reviews = QueryBuilder::for(Reviews::class)
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

        return (new ReviewsCollection($reviews))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviews $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $review = Reviews::create($validated);

        return (new ReviewsResource($review))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified review
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Reviews::findOrFail($id);

        return (new ReviewsResource($review))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display reviews for specific post (shop, brand, strain, etc)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        $config = Config::get('api');

        $reviews = Reviews::with('user')
            ->wherePostId($id)
            ->paginate($config['query']['pagination']);

        return (new ReviewsCollection($reviews))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display reviews for the logged in user
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function user(Request $request)
    {
        $config = Config::get('api');

        /**
         * We use Spatie's Query Builder package to handle
         * filtering, sorting, and includes
         */

        $reviews = QueryBuilder::for(Reviews::class)
            ->whereUserId($request->user()->id)
            ->allowedFilters([
                'post_id', 
                'rating', 
                'review'
            ])
            ->allowedIncludes([
                'user', 
                'post', 
                'strainMeta'
            ])
            ->paginate($config['query']['pagination']);

        return (new ReviewsCollection($reviews))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display reviews for specific user by ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function byUser($id)
    {
        $config = Config::get('api');

        $reviews = Reviews::with('post')
            ->whereUserId($id)
            ->paginate($config['query']['pagination']);

        return (new ReviewsCollection($reviews))
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
        $review = Reviews::findOrFail($id);

        $review->fill($request->validated());
        
        return (new ReviewsResource($review))
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
        Reviews::destroy($id);

        return response()->json([
            'code' => true,
            'response' => 'Successfully deleted review.'
        ]);
    }
}
