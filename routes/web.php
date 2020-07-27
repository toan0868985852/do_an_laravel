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

Route::get('/','homeController@home')->name('home');

Route::resource('login','loginResouce')->only([
    'index', 'store'
]);

Route::resource('signup','signupResource')->only([
    'index', 'store'
]);

Route::resource('user','UserResouce')->middleware('adminlogin');

Route::resource('admin','adminResource')->only([
    'index'
]);

Route::get('log_out','logoutController@log_out')->name('log_out');

Route::get('home','homeController@home')->name('home');

Route::group(['prefix'=>'admin'],function(){
    Route::resource('register','DangkyController')->only(['index']);
    Route::resource('edit','EditUserController');
});

Route::group(['prefix'=>'home'],function(){
    Route::get('blog_details','homeController@blog_details')->name('blog_details');
    Route::get('blog_grid','homeController@blog_grid')->name('blog_grid');
    Route::get('causes_details','homeController@causes_details')->name('causes_details');
    Route::get('causes_grid','homeController@causes_grid')->name('causes_grid');
    Route::get('about','homeController@about')->name('about');
    Route::get('even','homeController@even')->name('even');
    Route::get('project','homeController@project')->name('project');
});






