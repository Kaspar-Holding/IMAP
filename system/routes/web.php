<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/update_password',[UserController::class, 'update_password'])->name('update_password');
Route::get('/reset_password',[UserController::class, 'reset_password'])->name('reset_password');
Route::group(['middleware' =>[
    'auth:sanctum', 'verified'
]], function(){
    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'get_data'])->name('dashboard');
    Route::get('/layout', [DashboardController::class, 'layout'])->name('layout');
    // User Routes 
}

);
// Route::get('/yoco', function () {
//     return redirect("/yoco/inline");
// }); 
Route::get('/yoco', [ChargeController::class, 'Charge'])->name('Yoco');
// Route::get('/yoco', function () {
//     return view("yoco.inline");
// });  
Route::get('/', [WebsiteController::class, 'get_data'])->name('home');




