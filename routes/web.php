<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
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
})->name('welcome');

Route::get('register',[RegisterController::class,'show'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register');

Route::get('login',[ProfileController::class,'show'])->name('login');
Route::post('login',[ProfileController::class,'login'])->name('login');
Route::post('logout',[ProfileController::class,'logout'])->name('logout');

Route::get('admin-form',[AdminController::class,'show'])->name('admin-form');
Route::post('admin-register',[AdminController::class,'store'])->name('admin-register');
