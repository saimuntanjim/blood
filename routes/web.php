<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');
Route::get('/login-user', [App\Http\Controllers\FrontendController::class, 'login_user'])->name('login');
Route::get('/registration-form', [App\Http\Controllers\FrontendController::class, 'registration'])->name('reg_customer');
Route::get('/donar-view', [App\Http\Controllers\FrontendController::class, 'donar']);
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'about']);
Route::get('/community', [App\Http\Controllers\FrontendController::class, 'community_page']);
Route::get('/details', [App\Http\Controllers\FrontendController::class, 'details_page']);



Route::post('/save-user', [App\Http\Controllers\CustomerController::class, 'index']);
Route::post('/user-login', [App\Http\Controllers\CustomerController::class, 'login_user']);
Route::get('/user-profile', [App\Http\Controllers\CustomerController::class, 'user_profile']);
Route::get('/logout', [App\Http\Controllers\CustomerController::class, 'user_logout']);
Route::get('/edit-profile/{user_id}', [App\Http\Controllers\CustomerController::class, 'edit_profile']);
Route::get('/change-profile', [App\Http\Controllers\CustomerController::class, 'user_change']);
Route::post('/update-profile/{user_id}', [App\Http\Controllers\CustomerController::class, 'update_profile']);
Route::post('/change-designation/{user_id}', [App\Http\Controllers\CustomerController::class, 'change_designation']);


Route::post('/create-post/{user_id}', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/post-create/{user_id}', [App\Http\Controllers\HomeController::class, 'post_create']);
Route::post('/admin-panel', [App\Http\Controllers\HomeController::class, 'login_admin']);
Route::post('/profile-update/{admin_id}', [App\Http\Controllers\HomeController::class, 'profile_update']);
Route::post('/admin-save', [App\Http\Controllers\HomeController::class, 'save_admin']);
Route::get('/login-admin', [App\Http\Controllers\HomeController::class, 'login_page']);
Route::get('/admin-profile', [App\Http\Controllers\HomeController::class, 'admin_profile']);
Route::get('/admin-change-profile', [App\Http\Controllers\HomeController::class, 'user_change']);
Route::get('/all-donar', [App\Http\Controllers\HomeController::class, 'all_donar']);
Route::get('/all-user', [App\Http\Controllers\HomeController::class, 'all_user']);
Route::get('/profile-edit/{admin_id}', [App\Http\Controllers\HomeController::class, 'edit_profile']);
Route::get('/ban-donar/{user_id}', [App\Http\Controllers\HomeController::class, 'ban_donar']);
Route::get('/ban-user/{user_id}', [App\Http\Controllers\HomeController::class, 'ban_user']);
Route::get('/create-admin', [App\Http\Controllers\HomeController::class, 'admin_registration']);