<?php

use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/team',[HomeController::class, 'team'])->name('team');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
