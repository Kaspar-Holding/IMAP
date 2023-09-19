<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SocialAuthController;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\TutorialController;
use Carbon\Carbon;

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

Route::group(['middleware' =>[
    'auth:sanctum', 'verified'
]], function(){
    // Dashboard Routes
    
    // Route::get('/dashboard', [DashboardController::class, 'get_data'])->name('dashboard');
    // Route::get('/layout', [DashboardController::class, 'layout'])->name('layout');
    
    // User Routes 
}

);
// Route::get('/yoco', function () {
//     return redirect("/yoco/inline");
// }); 
Route::post('/search_results', [WebsiteController::class, 'search_results'])->name('search_results');

Route::get('/show-map',[MapController::class, 'showMap'])->name('showMap');
Route::get('/',  [WebsiteController::class, 'log_in'])->name('log_in');
Route::get('/test_connection', [TutorialController::class, 'test_connection'])->name('test_connection');
Route::get('/sign_up', [WebsiteController::class, 'sign_up'])->name('sign_up');
Route::get('/sidebar', [WebsiteController::class, 'sidebar'])->name('sidebar');
Route::get('/log_in', [WebsiteController::class, 'log_in'])->name('log_in');
Route::post('/edit_basic', [FormsController::class, 'edit_basic'])->name('edit_basic');
Route::post('/additional_information', [FormsController::class, 'additional_information'])->name('additional_information');
Route::post('/aerial_imagery_assessment', [FormsController::class, 'aerial_imagery_assessment'])->name('aerial_imagery_assessment');
Route::post('/built_component', [FormsController::class, 'built_component'])->name('built_component');
Route::post('/cultural_period_assignment', [FormsController::class, 'cultural_period_assignment'])->name('cultural_period_assignment');
Route::post('/environmental_information', [FormsController::class, 'environmental_information'])->name('environmental_information');
Route::post('/form_and_interpretation', [FormsController::class, 'form_and_interpretation'])->name('form_and_interpretation');
// Route::post('/heritage_protection_status', [FormsController::class, 'heritage_protection_status'])->name('heritage_protection_status');
// Route::post('/historic_maps_assessment', [FormsController::class, 'historic_maps_assessment'])->name('historic_maps_assessment');
Route::post('/keywords_and_themes', [FormsController::class, 'keywords_and_themes'])->name('keywords_and_themes');
// Route::post('/location', [FormsController::class, 'location'])->name('location');
// Route::post('/name', [FormsController::class, 'name'])->name('name');
Route::post('/vessel_tonnage', [FormsController::class, 'vessel_tonnage'])->name('vessel_tonnage');
Route::post('/site_depth_information', [FormsController::class, 'site_depth_information'])->name('site_depth_information');
// Route::post('/vessel_information', [FormsController::class, 'vessel_information'])->name('vessel_information');
Route::post('/condition_assessment', [FormsController::class, 'condition_assessment'])->name('condition_assessment');
Route::get('/add_form', [WebsiteController::class, 'add_form'])->name('add_form');
Route::post('/add_record', [WebsiteController::class, 'add_record'])->name('add_record');
Route::get('/show_report', [WebsiteController::class, 'show_report'])->name('show_report');
Route::get('/dashboard', [WebsiteController::class, 'dashboard'])->name('dashboard');

Route::post('/create_user', [WebsiteController::class, 'create_user'])->name('create_user');
Route::post('/home', [WebsiteController::class, 'home'])->name('home');

Route::any('/search_talent',function(){
    $key = Request::get ( 'keyword' );
    $loc = Request::get ( 'location' );
    $all = Request::get ( 'all' );
    if($key != "" && $loc != "" && $all == ""){
    $jobs = user_infos::where('skills','LIKE','%'.$key.'%')->orWhere('location','LIKE','%'.$loc.'%')->get();
   
    }
    else if($key != "" && $loc == "" && $all == ""){
        
        $jobs = user_infos::where('skills','LIKE','%'.$key.'%')->get();
        // echo json_encode($jobs);die();
        }
    else if($key == "" && $loc != "" && $all == ""){
            $jobs = user_infos::where('location','LIKE','%'.$loc.'%')->get();
            }
    else if($key == "" && $loc == "" && $all != ""){
                $jobs = user_infos::all();
            }
    if(count($jobs) > 0){
        return view('hire-talent',['job_list'=>$jobs,]);
    }
    else{
        $jobs = user_infos::all();
        return view('hire-talent',['job_list'=>$jobs,]);
    }
    
   
});










