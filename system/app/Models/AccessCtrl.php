<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AccessCtrl extends Model
{
    public static function isAdmin(){
        return Auth::user()->role == "admin";
    }
    public static function isManager(){
        return Auth::user()->role == "manager";
    }
} 
