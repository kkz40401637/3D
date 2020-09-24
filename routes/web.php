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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/numberlist','ThreedController');
Route::resource('/offnumber','OffnumberController');
Route::resource('/allnumber','AllnumberController');


Route::get('adminlogin/', 'AdminLoginController@index');


Route::post('adminlogin/', 'AdminLoginController@checklogin');
Route::post('adminlogin/logout', 'AdminLoginController@logout');




Route::resource('admins','AdminController')->middleware('auth');
Route::resource('users','UserController')->middleware('auth');


