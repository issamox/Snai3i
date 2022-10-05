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


/* Front */
Route::get('/',[\App\Http\Controllers\Front\FrontController::class,'index'])->name('front.index');
Route::get('/profile/{user}-{slug}',[\App\Http\Controllers\Front\ArtisanController::class,'show']);
Route::get('/metier/{slug}/{city?}',[\App\Http\Controllers\Front\FrontController::class,'jobs']);
Route::get('/signup',[\App\Http\Controllers\Front\FrontController::class,'inscription'])->name('front.signup');
Route::post('/signup',[\App\Http\Controllers\Front\FrontController::class,'signup'])->name('front.signup.store');
Route::get('/signin',[\App\Http\Controllers\Front\FrontController::class,'login'])->name('front.login');
Route::post('/signin',[\App\Http\Controllers\Front\FrontController::class,'login'])->name('front.login');
Route::get('/account',[\App\Http\Controllers\Front\FrontController::class,'account'])->name('front.account');
Route::post('/profile',[\App\Http\Controllers\Front\FrontController::class,'profile'])->name('front.profile');
Route::post('/review',[\App\Http\Controllers\Front\FrontController::class,'review'])->name('artisan.review');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Admin */
Route::resource('admin/jobs', \App\Http\Controllers\Admin\JobController::class);
Route::resource('admin/services', \App\Http\Controllers\Admin\ServiceController::class);
Route::resource('admin/cities', \App\Http\Controllers\Admin\CityController::class);
Route::resource('admin/users', \App\Http\Controllers\Admin\UserController::class);
Route::resource('admin/realisations', \App\Http\Controllers\Admin\RealisationController::class);
