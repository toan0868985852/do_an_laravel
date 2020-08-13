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


Route::resource('user','userResouce')->middleware('adminlogin');


//-------------------------quan ly--------------------------
Route::resource('admin','adminResource')->only(['index']);

Route::group(['prefix'=>'admin'],function(){
    Route::resource('register','registerController')->only(['index']);
    Route::resource('edit','editUserController');
    Route::get('register/serch','serchController@getserch')->name('serch');
    Route::get('email','mailController@getmail')->name('mail');
    Route::delete('sendemail/{id}','mailController@deletemail')->name('deletemail');
    Route::get('sendemail','mailController@sendemail')->name('sendemail');
    Route::get('sendemail/viewmail/{id}','mailController@viewmail')->name('viewmail');
    Route::get('image','adminController@image')->name('image');
    Route::get('image/listimg/{id}','adminController@imagelist')->name('imglist');
    Route::get('donate','adminController@donate')->name('donate');
    Route::get('donate/active/{id}','adminController@donate_active')->name('donate_active');
    Route::get('donate/unactive/{id}','adminController@donate_unactive')->name('donate_unactive');
    Route::get('information','adminController@information')->name('information');
});
//-------------------------quan ly--------------------------



//-----------------------dang xuat-------------------------------
Route::get('log_out','logoutController@log_out')->name('log_out');
//-----------------------dang xuat-------------------------------



//----------------------trang chu----------------------------
Route::get('/','homeController@home')->name('home');
Route::get('home','homeController@home')->name('home');


Route::group(['prefix'=>'home'],function(){
    Route::get('blog_details','homeController@blog_details_1')->name('blog_details_1');
    Route::get('blog_details_1/{id}','homeController@blog');
    Route::get('blog_grid','homeController@blog_grid')->name('blog_grid');
    Route::get('cause_details/{id}','homeController@causes_details')->name('causes_details');
    Route::get('causes_grid','homeController@causes_grid')->name('causes_grid');
    Route::get('about','homeController@about')->name('about');
    Route::get('even','homeController@even')->name('even');
    Route::get('project','homeController@project')->name('project');
    Route::get('event_details/{id}','homeController@event_details');
    Route::get('donate2/{id}','homeController@donate2')->name('donate2');
    Route::post('donate/card','paymentController@card');
    Route::post('donate/order','paymentController@order');
    Route::post('donate/paypal','payPalPaymentController@paywithpaypal');
    Route::post('donate/paypal/status','payPalPaymentController@status');

});
//----------------------trang chu----------------------------

//-----------------------message----------------------------
Route::resource('message','messageController')->only(['store']);
//-----------------------message----------------------------

//-----------------------donate----------------------------
Route::resource('donate','donateResource')->only(['store']);
//-----------------------donate----------------------------

//-------------------------send email-----------------------------------
Route::post('admin/mail','sendmailController@sendmail')->name('sendmail');
//-------------------------send email-----------------------------------

Route::post('stripe', 'stripePaymentController@stripePost')->name('stripe.post');






