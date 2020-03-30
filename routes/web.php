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



Route::get('/',"dashboardController@index");

Route::get('/register',"Auth\\registerController@index");
Route::post('/register',"Auth\\registerController@register");

Route::post('/login',"Auth\loginController@login");
Route::get('/login',"Auth\loginController@index");

Route::get("/logout","Auth\logoutController@index");

Route::get('/residences', function () {
    return view('viewResidence');
});

