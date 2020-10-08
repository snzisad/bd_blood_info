<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "HomeController@showHomePage")->name('home');

Route::post('/user/add', "AuthController@addDonor")->name('add_donor');
