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



//----------------login-signup-forgotPassword------------------------------------
Route::resource('login','loginResouce')->only(['index', 'store']);
Route::resource('signup','signupResource')->only(['index', 'store']);

//----------------login-signup-forgotPassword------------------------------------


//-----------------------------reset password--------------------------------------
Route::get('forgotPassword','forgotPasswordControllers@forgotPassword')->name('forgotPassword');
Route::post('forgotPassword','forgotPasswordControllers@Password')->name('forgotPassword');
Route::get('/reset_password/{email}/{code}','forgotPasswordControllers@reset')->name('resetPassword');
Route::post('/reset_password/{email}/{code}','forgotPasswordControllers@resetPassword')->name('resetPassword');
//-----------------------------reset password--------------------------------------


Route::resource('user','UserResouce')->middleware('adminlogin');


//-------------------------quan ly--------------------------
Route::resource('admin','adminResource')->only(['index']);

Route::group(['prefix'=>'admin'],function(){
    Route::resource('register','DangkyController')->only(['index']);
    Route::resource('edit','EditUserController');
});
//-------------------------quan ly--------------------------



//-----------------------dang xuat-------------------------------
Route::get('log_out','logoutController@log_out')->name('log_out');
//-----------------------dang xuat-------------------------------



//----------------------trang chu----------------------------
Route::get('/','homeController@home')->name('home');
Route::get('home','homeController@home')->name('home');


Route::group(['prefix'=>'home'],function(){
    Route::get('blog_details','homeController@blog_details')->name('blog_details');
    Route::get('blog_grid','homeController@blog_grid')->name('blog_grid');
    Route::get('causes_details','homeController@causes_details')->name('causes_details');
    Route::get('causes_grid','homeController@causes_grid')->name('causes_grid');
    Route::get('about','homeController@about')->name('about');
    Route::get('even','homeController@even')->name('even');
    Route::get('project','homeController@project')->name('project');
});
//----------------------trang chu----------------------------

//---------------------Dasdboard---------------------------
Route::get('dashboard', function (){
    return view('dashboard.dashboard');
});
//---------------------Dasdboard---------------------------







