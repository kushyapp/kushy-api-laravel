<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Resources\Reviews as ReviewsResource;
use KushyApi\Http\Resources\ReviewsCollection;
use KushyApi\Reviews;

class ReviewsController extends Controller
{
    /**
     * Display a paginated archive of all reviews
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Reviews::paginate(10);

        return new ReviewsCollection($reviews);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        return new ReviewsResource($review);
    }

    /**
     * Display reviews for specific post (shop, brand, strain, etc)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        $reviews = Reviews::with('user')->wherePostId($id)->paginate(10);

        return new ReviewsCollection($reviews);
    }

    /**
     * Display reviews for specific user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        $reviews = Reviews::with('post')->wherePostId($id)->paginate(10);

        return new ReviewsCollection($reviews);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
