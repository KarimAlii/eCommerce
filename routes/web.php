<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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
Route::prefix('products')->group(function(){
    Route::get('/men', [ProductsController::class, 'menProducts']);
    Route::get('/women', [ProductsController::class, 'womenProducts']);
    Route::get('/accs', [ProductsController::class, 'accsProducts']);
});
Route::get('/search',[ProductsController::class, 'search']);
Route::get('/',[HomeController::class,'welcome']);
Route::get('/profile',[ProfileController::class,'showProfile']);
Route::get('/profile',[ProfileController::class,'showProfile']);
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
