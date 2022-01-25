<?php

use App\Http\Controllers\PostController;
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

Route::view('/panel', 'panel')->name('panel');

Route::view('/users', 'users.index')->name('users.index');

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::View('/home', 'home')->name('home');

    Route::View('/profile', 'profile')->name('profile');

    });




//Route::resource('Users', UsersController::class);
