<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use KushyApi\Http\Controllers\Controller;
use KushyApi\Http\Resources\Images as ImagesResource;
use KushyApi\Http\Resources\ImagesCollection;
use KushyApi\Images;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Images::paginate(10);

        return (new ImagesCollection($photos))
            ->response()
            ->setStatusCode(201);
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
     * Display a specific image
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photos = Images::findOrFail($id);

        return (new ImagesResource($photos))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display images for a certain post (shop, brand, strain, etc)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        $photos = Images::wherePostId($id)->paginate(10);

        return new ImagesCollection($photos);
    }

    /**
     * Display images for a certain user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        $photos = Images::whereUserId($id)->paginate(10);

        return new ImagesCollection($photos);
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
