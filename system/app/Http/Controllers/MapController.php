<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use DB;
 
class MapController extends Controller
{
    public function showMap(Request $request)
    {
        $latitude = $request->query('latitude');
        $longitude = $request->query('longitude');
    
        return view('map', compact('latitude', 'longitude'));
    }
    
}
