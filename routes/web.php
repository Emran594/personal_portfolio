<?php

use App\Http\Controllers\AboutController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);


Route::get('/about',[AboutController::class,'index']);
Route::get('/portfolio',[AboutController::class,'portfolio']);
Route::get('/services',[AboutController::class,'services']);
Route::get('/blog',[AboutController::class,'blog']);
Route::get('/contact',[AboutController::class,'contact']);
