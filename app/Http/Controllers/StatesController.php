<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use KushyApi\Http\Controllers\Controller;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Grab a list of cities from the config
        // Code below dynamically pulls state config data
        // Currently hardcoded since we only have Cali data 
        // $config_uri = 'city.' . strtolower($location['state_name']);
        $config_uri = "city";
        $stateData = Config::get($config_uri);

        if($stateData)
        {
            return response()
                ->json($stateData);
        } else {
            return response()
                ->json(['status' => "Couldn't find cities for that state. Maybe try spelling it out since abbreviations won't work."]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($state)
    {
        // Grab a list of cities from the config
        // Code below dynamically pulls state config data
        // Currently hardcoded since we only have Cali data 
        // $config_uri = 'city.' . strtolower($location['state_name']);
        $config_uri = "city.$state";
        $stateData = Config::get($config_uri);

        if($stateData)
        {
            return response()
                ->json($stateData);
        } else {
            return response()
                ->json(['status' => "Couldn't find cities for that state. Maybe try spelling it out since abbreviations won't work."]);
        }
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
