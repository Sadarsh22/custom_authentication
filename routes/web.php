<?php

use App\Http\Controllers\customAuthController;
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

Route::get('/',[customAuthController::class,'index']);
Route::get('login',[customAuthController::class,'login']);
Route::post('registerUser',[customAuthController::class,'registerUser']);
Route::post('loginUser',[customAuthController::class,'loginUser']);
Route::get('dashboard',[customAuthController::class,'dashboard']);
Route::get('logout',[customAuthController::class,'logout']);




