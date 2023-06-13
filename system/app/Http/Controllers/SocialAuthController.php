<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Auth;
// use Socialite;
use DB;
 
class SocialAuthController extends Controller
{
   public function redirectToProvider(){
    return Socialite::driver('google')->redirect();
   }

   public function handleCallback(){
    try{
        $user = Socialite::driver('google')->user();
    }
    catch(\Exception $e){
        return redirect('/login');
    }
    $existingUser = user_infos::where('google_id',$user->id)->first();

    if($existingUser){
        Auth::login($existingUser,true);
    }
    else{
        $newUser = user_infos::create([
            'first_name' => $user->name,
            'email'=> $user->email,
            'google_id' => $user->id,
        ]);
        Auth::login($existingUser,true);
    }
    return redirect()->to('/home');
   }
}
