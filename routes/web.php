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


//============= General ==============//

Route::get('/',"dashboardController@index");

Route::get('/register',"Auth\\registerController@index");
Route::post('/register',"Auth\\registerController@register");

Route::post('/login',"Auth\loginController@login");
Route::get('/login',"Auth\loginController@index");

Route::get("/logout","Auth\logoutController@index");

//============== Housing Officer ========//
Route::get('/residences/setup',"Pages\setUpResidenceController@index");
Route::post('/residences/submit',"Pages\setUpResidenceController@addResidence");
Route::get('/applications',"Pages\getApplicationController@index" );
Route::post('/application/allocate',"Pages\getApplicationController@allocate");
Route::post('/application/reject',"Pages\getApplicationController@reject");

//============== Applicant ===============//
Route::get('/residences', "Pages\getResidenceController@index");
Route::post('/residences/apply', "Pages\getResidenceController@addApplication");
Route::get('/applications/history',"Pages\getHistoryController@index");
Route::post('/application/cancel',"Pages\getHistoryController@cancel");

// ============== Admin ==================//
Route::get("/admin/login","Pages\adminController@index");
Route::post("/admin/login","Pages\adminController@login");
Route::get("/admin","Pages\adminController@dashboard");
Route::get("/admin/register/housing-officer","Pages\adminController@registerHo");
Route::get("/admin/register/housing-officer/submit","Pages\adminController@registerHoSubmit");




