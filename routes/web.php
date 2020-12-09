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

Route::get('/', function () {
    return view('welcome');
});

//  Route::resource('/','DashboardController');
Auth::routes(['verify' => true, 'register' => false]);
// Auth::routes();

// Route::get('/dashboard', 'HomeController@index')->name('home');
Route::resource('change-password','ChangepasswordAdminController')->middleware('auth');
Route::resource('/numberlist','ThreedController')->middleware('auth');
Route::resource('/offnumber','OffnumberController')->middleware('auth');
Route::resource('/allnumber','AllnumberController')->middleware('auth');

Route::get('adminlogin/', 'AdminLoginController@index')->middleware('auth');
Route::get('dashboard/', 'AdminLoginController@index1')->middleware('auth');

Route::post('adminlogin/', 'AdminLoginController@checklogin');
Route::post('adminlogin/logout', 'AdminLoginController@logout');




Route::resource('admins','AdminController')->middleware('role:superadmin');

Route::get('/{user}/reports', 'ReportContrller@index2')->name('user_reports');
Route::get('/{user}/drives', 'DriveController@index2')->name('user_drives');
Route::get('/{user}/bodysl', 'BodylController@index2')->name('user_bodylsl');
Route::get('/{user}/towds','TowdController@index2')->name('user_towds');
Route::get('/{user}/wdraws', 'WithdrawController@index2')->name('user_wdraws');


Route::resource('users','UserController')->middleware('role:admin');
Route::resource('register','RegisterController');
Route::resource('moneys','MoneyController')->middleware('auth');
Route::resource('reports','ReportContrller')->middleware('auth');
Route::resource('wdraws','WithdrawController')->middleware('auth');
Route::resource('footballs', 'FootballController')->middleware('auth');
Route::resource('drives','DriveController')->middleware('auth');
Route::resource('bodys','BodyController')->middleware('auth');
Route::resource('bodysl','BodylController')->middleware('auth');
Route::resource('towds','TowdController')->middleware('auth');
Route::resource('inmoneys','InmoneyController')->middleware('auth');