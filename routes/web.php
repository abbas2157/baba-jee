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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'index']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/menue',[HomeController::class,'menue']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/booking',[HomeController::class,'booking']);
Route::get('/ourteam',[HomeController::class,'ourteam']);
Route::get('/testimonial',[HomeController::class,'testimonial']);