<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' =>[
    'auth:sanctum', 'verified'
]], function(){
   
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('/register_user' , [UserController::class, 'register_user'])->name('register_user');
    Route::get('/users_list_api' ,  [UserController::class, 'users_list_api'])->name('users_list_api');
    Route::post('/mail', [WebsiteController::class, 'mail'])->name('mail');
   
