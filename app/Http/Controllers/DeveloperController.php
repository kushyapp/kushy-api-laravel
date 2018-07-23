<?php

namespace KushyApi\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{

    /**
     * Displays index of Kushy Developers portal
     */
    public function index() {
        
        return view('routes.developers.index');
        
    }

    /**
     * Displays index of Kushy Developers portal
     */
    public function apikeys() {
        
        return view('routes.developers.apikeys');
        
    }

    /**
     * Displays index of Kushy Developers portal
     */
    public function gettingStarted() {
        
        return view('routes.developers.gettingstarted');
        
    }
}
