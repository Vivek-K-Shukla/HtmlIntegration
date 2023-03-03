<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');
    Route::get('about','about');
    Route::get('blog','blog');
    Route::get('class','class');
    Route::get('contact','contact');
    Route::get('gallery','gallery');
    Route::get('single','single');
    Route::get('team','team');
});
