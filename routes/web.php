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

Route::get('/wel', function () {
    return view('welcopy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'auth'],function(){
    Route::get('customAuth', 'CustomAuthMiddleware@CustomAuth')->middleware('ChackAge');
});


Route::get('frontEnd', 'CustomAuthMiddleware@frontEnd')->middleware('auth');
Route::get('backEnd', 'CustomAuthMiddleware@backEnd')->middleware('auth:admin');




