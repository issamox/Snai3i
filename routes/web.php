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

Route::get('/',[\App\Http\Controllers\Front\FrontController::class,'index']);
Route::get('/metier/{slug}/{city?}',[\App\Http\Controllers\Front\FrontController::class,'jobs']);
Route::get('/profile/{user}-{slug}',[\App\Http\Controllers\Front\ArtisanController::class,'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('admin/jobs', \App\Http\Controllers\Admin\JobController::class);
