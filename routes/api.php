<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::group(['middleware' => 'auth.jwt'], function(){
Route::post('/logout','AuthController@logout');
});
// Route::get('/logout', 'Api\AuthController@logout');

Route::get('/user', 'Api\AuthController@user');

//allnumber
Route::get('/allnumber','Api\AllnumberController@index');
Route::get('/offnumber','Api\OffController@index');
Route::get('/report','Api\ReportController@index');
