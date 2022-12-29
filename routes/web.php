<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\insertFields_DB;


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

Route::get('listofstaff', [insertFields_DB::class, 'index']);
Route::post('register', [insertFields_DB::class, 'register']);



Route::get('users', [UserFormController::class, 'getData']);


Route::get('userInfo', [UserFormController::class, 'getClientData']);



Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/welcome', 'App\Http\Controllers\HomeController@index');

Route::get('login', 'App\Http\Controllers\HomeController@login');

Route::get('createquotes', 'App\Http\Controllers\HomeController@createquotes');

Route::get('listofquotes', 'App\Http\Controllers\HomeController@listofquotes');

Route::get('createstaff', 'App\Http\Controllers\HomeController@createstaff');

Route::get('listofstaff', 'App\Http\Controllers\HomeController@listofstaff');

