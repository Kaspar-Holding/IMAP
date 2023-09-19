<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TutorialController extends Controller
{   
    public function test_connection()
    {   
        try {
            $dbname = DB::connection()->getDatabaseName();
            return "Connected database name is: {$dbname}";
        } catch(\Exception $e) {
            return "Error in connecting to the database";
        }
    }
}