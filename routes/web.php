<?php

use GuzzleHttp\Middleware;
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

//Route::get('/login', function () {
//    return view('login');
//});

Route::view('/', 'welcome')->name('welcome');

Route::view('/home', 'home')->Middleware(['auth', 'verified'])->name('home');
//Route::view('/home', 'home')->name('home');

Route::view('/MyAccount', 'MyAccount')->name('MyAccount');
