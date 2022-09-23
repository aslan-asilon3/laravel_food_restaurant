<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodOriginController;
use App\Http\Controllers\HomeController;

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

Route::resource('/', HomeController::class);

Route::get('/landing-page', function () {
    return view('pages/landingpage/index');
});

Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('food', FoodController::class);

Route::resource('foodorigin', FoodOriginController::class);
