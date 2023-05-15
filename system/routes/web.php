<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use Carbon\Carbon;
use App\Models\post_jobs;
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
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/sign_up', [WebsiteController::class, 'sign_up'])->name('sign_up');
Route::get('/log_in', [WebsiteController::class, 'log_in'])->name('log_in');
Route::get('/hire_talent', [WebsiteController::class, 'hire_talent'])->name('hire_talent');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/companies', [WebsiteController::class, 'companies'])->name('companies');
Route::get('/add_organization', [WebsiteController::class, 'add_organization'])->name('add_organization');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact_us', [WebsiteController::class, 'contact_us'])->name('contact_us');
Route::get('/post_jobs', [WebsiteController::class, 'post_jobs'])->name('post_jobs');

//post request
Route::post('/update_jobs', [WebsiteController::class, 'update_jobs'])->name('update_jobs');
Route::post('/create_organization', [WebsiteController::class, 'create_organization'])->name('create_organization');
Route::post('/update_profile', [WebsiteController::class, 'update_profile'])->name('update_profile');
Route::post('/view_organization', [WebsiteController::class, 'view_organization'])->name('view_organization');
Route::post('/create_user', [WebsiteController::class, 'create_user'])->name('create_user');
Route::post('/sign_in', [WebsiteController::class, 'sign_in'])->name('sign_in');
Route::any('/search',function(){
    $key = Request::get ( 'keyword' );
    $loc = Request::get ( 'location' );
    $all = Request::get ( 'all' );
    if($key != "" && $loc != "" && $all == ""){
    $jobs = post_jobs::where('title','LIKE','%'.$key.'%')->orWhere('location','LIKE','%'.$loc.'%')->get();
   
    }
    else if($key != "" && $loc == "" && $all == ""){
        
        $jobs = post_jobs::where('title','LIKE','%'.$key.'%')->get();
        // echo json_encode($jobs);die();
        }
    else if($key == "" && $loc != "" && $all == ""){
            $jobs = post_jobs::where('location','LIKE','%'.$loc.'%')->get();
            }
    else if($key == "" && $loc == "" && $all != ""){
                $jobs = post_jobs::all();
            }
    if(count($jobs) > 0){
        return view('home',['job_list'=>$jobs,]);
    }
   
   
});









