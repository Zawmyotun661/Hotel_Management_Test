<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/','App\Http\Controllers\UserDashboardController@create');
// Route::post('/create','App\Http\Controllers\UserDashboardController@store');
Route::get('/','App\Http\Controllers\UserDashboardController@create');
Route::post('/create/user','App\Http\Controllers\UserDashboardController@store');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::resource('/admin', 'App\Http\Controllers\AdminController');
    Route::get('/export', 'App\Http\Controllers\AdminController@export');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
