<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\SocialiteController;

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


    Route::get('/', [AppController::class, 'home'])->name('home');
    Route::get('/menus', [AppController::class, 'menus'])->name('menus');
    Route::get('/search', [AppController::class, 'search'])->name('search');
Route::prefix('socialite')->group(function () {
    Route::get("redirect/{provider}", [SocialiteController::class, 'redirect'])->name('socialite.redirect');
    Route::get("callback/{provider}", [SocialiteController::class, 'callback'])->name('socialite.callback');
});