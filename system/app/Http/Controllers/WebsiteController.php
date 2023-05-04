<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\AccessCtrl;
use DB;
 
class WebsiteController extends Controller
{
    function get_data(){
        return view("home");
    }
    

}
