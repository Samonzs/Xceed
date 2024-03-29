<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\TaCcontroller;
use App\Http\Controllers\insertFields_DB;
use App\Http\Controllers\staffListCrudController;
use App\Http\Controllers\lovController;




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
Route::get('register', [insertFields_DB::class, 'getStaffData']);
Route::post('register', [insertFields_DB::class, 'getStaffData']);



//Route::get('users', [UserFormController::class, 'getData']);


Route::get('/user', 'App\Http\Controllers\UserFormController@index');
Route::post('/user/checklogin', 'App\Http\Controllers\UserFormController@checklogin');
Route::get('user/successlogin', 'App\Http\Controllers\UserFormController@successlogin');
Route::get('user/logout', 'App\Http\Controllers\UserFormController@logout');



Route::get('clientDetails', [UserFormController::class, 'getClientData']);


Route::get('TaC', 'App\Http\Controllers\HomeController@TaC');
Route::resource('/TaC', TaCcontroller::class);
Route::resource('/staffListCrud', staffListCrudController::class);
Route::resource('/lov', lovController::class);



Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/welcome', 'App\Http\Controllers\HomeController@index');


Route::get('login', 'App\Http\Controllers\HomeController@login');


Route::get('createquotes', 'App\Http\Controllers\HomeController@createquotes');


Route::get('createstaff', 'App\Http\Controllers\HomeController@createstaff');




Route::any('confirmation', 'App\Http\Controllers\UserController@confirmation');
Route::any('client_show', 'App\Http\Controllers\UserController@client_show');
Route::any('send_email', 'App\Http\Controllers\UserController@send_email');
Route::any('send', 'App\Http\Controllers\UserController@send');
Route::any('show_pdf', 'App\Http\Controllers\UserController@show_pdf');

Route::post('/lov/{id}/store', 'App\Http\Controllers\lovController@store');



Route::post('signature', 'App\Http\Controllers\UserController@signature')->name('signature.store');
