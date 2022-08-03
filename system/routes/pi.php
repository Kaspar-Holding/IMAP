<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WeeklyLineupController;


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
    
    Route::get('/dashboard', [DashboardController::class, 'get_data'])->name('dashboard');
     
    Route::get('/layout', [DashboardController::class, 'layout'])->name('layout');
    Route::get('/add_new_user', [UserController::class, 'add_new_user'])->name('add_new_user');
    Route::post('/add_user',[UserController::class, 'create']);
    Route::get('/admin_list' ,  [UserController::class, 'admin_list'])->name('admin_list');
    Route::get('/edit_admin_details/{id}' ,  [UserController::class, 'edit_admin_details'])->name('edit_admin_details');
    Route::get('/delete_admin_details/{id}' ,  [UserController::class, 'delete_admin_details'])->name('delete_admin_details');
    Route::post('/update_admin_user', [UserController::class, 'update_admin_user'])->name('update_admin_user');
    Route::get('/users_list' ,  [UserController::class, 'users_list'])->name('users_list');
    Route::get('/users_list1' ,  [UserController::class, 'users_list'])->name('gallery_list');
    Route::get('/active_users' ,  [UserController::class, 'active_users'])->name('active_users');
    Route::get('/inactive_users' ,  [UserController::class, 'inactive_users'])->name('inactive_users');
    Route::get('/invalid_users' ,  [UserController::class, 'invalid_users'])->name('invalid_users');
    Route::get('/view_user_details/{id}', [UserController::class, 'view_user_details'])->name('view_user_details');
    Route::post('/user_status_update', [UserController::class, 'user_status_update'])->name('user_status_update');
    Route::get('/approve_user/{id}', [UserController::class, 'approve_user'])->name('approve_user');
    Route::get('/deny_user/{id}', [UserController::class, 'deny_user'])->name('deny_user');
    Route::get('/block_user/{id}', [UserController::class, 'block_user'])->name('block_user');
    Route::get('/survey_list' ,  [SurveyController::class, 'survey_list'])->name('survey_list');
    Route::get('/add_new_survey', [SurveyController::class, 'add_new_survey'])->name('add_new_survey');
    Route::get('/delete_survey/{id}', [SurveyController::class, 'delete_survey'])->name('delete_survey');
    Route::post('/create_survey',[SurveyController::class, 'create_survey']);
    Route::get('/edit_survey/{id}', [SurveyController::class, 'edit_survey'])->name('edit_survey');
    Route::post('/survey_update', [SurveyController::class, 'survey_update'])->name('survey_update');

    Route::get('/view_survey_questions/{id}', [SurveyController::class, 'view_survey_questions'])->name('view_survey_questions');
    Route::get('/add_new_question/{id}', [SurveyController::class, 'add_new_question'])->name('add_new_question');
    Route::post('/create_question',[SurveyController::class, 'create_question']);
    Route::get('/edit_question/{id}', [SurveyController::class, 'edit_question'])->name('edit_question');
    Route::post('/update_question', [SurveyController::class, 'update_question'])->name('update_question');

    Route::get('/view_survey_answers/{id}', [SurveyController::class, 'view_survey_answers'])->name('view_survey_answers');
    Route::get('/add_new_answer/{id}', [SurveyController::class, 'add_new_answer'])->name('add_new_answer');
    Route::post('/create_answer',[SurveyController::class, 'create_answer']);
    Route::get('/edit_answer/{id}', [SurveyController::class, 'edit_answer'])->name('edit_answer');
    Route::post('/update_answer', [SurveyController::class, 'update_answer'])->name('update_answer');
    
    
    Route::get('/fetch_dha_profile/{id}', [UserController::class, 'fetch_dha_profile'])->name('fetch_dha_profile');
    
    Route::get('/users_event_attend_list' ,  [EventController::class, 'users_event_attend_list'])->name('users_event_attend_list');
    Route::get('/view_user_event_details/{id}', [EventController::class, 'view_user_event_details'])->name('view_user_event_details');
    Route::get('/event_list' ,  [EventController::class, 'event_list'])->name('event_list');
    Route::get('/add_new_event', [EventController::class, 'add_new_event'])->name('add_new_event');
    Route::post('/create_event', [EventController::class, 'create_event'])->name('create_event');
    Route::get('/edit_event/{id}', [EventController::class, 'edit_event'])->name('edit_event');
    Route::post('/update_event', [EventController::class, 'update_event'])->name('update_event');
    Route::get('/delete_event/{id}', [EventController::class, 'delete_event'])->name('delete_event');

    Route::get('/weekly_lineup_list' ,  [WeeklyLineupController::class, 'weekly_lineup_list'])->name('weekly_lineup_list');
    Route::get('/add_new_weekly_lineup', [WeeklyLineupController::class, 'add_new_weekly_lineup'])->name('add_new_weekly_lineup');
    Route::post('/create_weekly_lineup', [WeeklyLineupController::class, 'create_weekly_lineup'])->name('create_weekly_lineup');
    Route::get('/edit_weekly_lineup/{id}', [WeeklyLineupController::class, 'edit_weekly_lineup'])->name('edit_weekly_lineup');
    Route::post('/update_weekly_lineup', [WeeklyLineupController::class, 'update_weekly_lineup'])->name('update_weekly_lineup');
    Route::get('/delete_weekly_lineup/{id}', [WeeklyLineupController::class, 'delete_weekly_lineup'])->name('delete_weekly_lineup');
    
    Route::get('/register_new_user', [UserController::class, 'register_new_user'])->name('register_new_user');
    Route::post('/save_user',[UserController::class, 'save_user']);
    
    Route::get('/gallery_list' ,  [GalleryController::class, 'gallery_list'])->name('gallery_list');
    Route::get('/add_new_gallery', [GalleryController::class, 'add_new_gallery'])->name('add_new_gallery');
    Route::post('/create_gallery', [GalleryController::class, 'create_gallery'])->name('create_gallery');
    Route::get('/edit_gallery/{id}', [GalleryController::class, 'edit_gallery'])->name('edit_gallery');
    Route::post('/update_gallery', [GalleryController::class, 'update_gallery'])->name('update_gallery');
    Route::get('/delete_gallery/{id}', [GalleryController::class, 'delete_gallery'])->name('delete_gallery');

    Route::get('/news_list' ,  [NewsController::class, 'news_list'])->name('news_list');
    Route::get('/add_news', [NewsController::class, 'add_news'])->name('add_news');
    Route::post('/create_news', [NewsController::class, 'create_news'])->name('create_news');
    Route::get('/edit_news/{id}', [NewsController::class, 'edit_news'])->name('edit_news');
    Route::post('/update_news', [NewsController::class, 'update_news'])->name('update_news');
    Route::get('/delete_news/{id}', [NewsController::class, 'delete_news'])->name('delete_news');
	}
);
Route::get('/', [WebsiteController::class, 'get_data'])->name('home');
Route::get('/club', [WebsiteController::class, 'get_club'])->name('club_special');
Route::get('/booth', [WebsiteController::class, 'get_booth'])->name('booth');
Route::get('/gallery', [WebsiteController::class, 'get_gallery'])->name('gallery');
Route::get('/club_events', [WebsiteController::class, 'get_clubevent'])->name('club_events');


