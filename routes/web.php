<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//
//    return view('home');
//});
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/contacts', 'contacts')->name('contacts');
    Route::get('/catalog', 'catalog')->name('catalog');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/signin', 'signin')->name('signin');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function () {
   Route::post('/signup', 'signup')->name('signup');

   Route::post('/signin', 'signin')->name('signin');

   Route::get('/logout', 'logout')->name('logout');
});
