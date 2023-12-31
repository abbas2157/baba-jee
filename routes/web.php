<?php

use App\Http\Controllers\ContactController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/menue',[HomeController::class,'menue']);

Route::get('/contact',[ContactController::class,'contact']);
Route::post('contact/store',[ContactController::class,'store'])->name('contact_store');

Route::get('/booking',[HomeController::class,'booking']);
Route::post('booking/store',[HomeController::class,'store'])->name('booking_store');

Route::get('/ourteam',[HomeController::class,'ourteam']);
Route::get('/testimonial',[HomeController::class,'testimonial']);