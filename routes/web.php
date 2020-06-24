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

Route::get('/', 'ApiController@indexAction');
Route::get('/index', 'ApiController@indexAction');
Route::get('/Registration', 'ApiController@RegistrationAction');
Route::get('/about', 'ApiController@aboutAction');
Route::get('/unnamedpage', 'ApiController@unnamedpageAction');
