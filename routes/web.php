<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
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

Route::controller(RegisterController::class)->name('register')->group(function (){
    Route::get('register','show');
    Route::post('register','store');
});

Route::controller(ProfileController::class)->group(function (){
    Route::get('login','show')->name('login');
    Route::post('login','login')->name('login');
    Route::post('logout','logout')->name('logout');
});

Route::controller(AdminController::class)->group(function (){
    Route::get('admin-form','show')->name('admin-form');
    Route::post('admin-register','store')->name('admin-register');
    Route::get('admins','dashboard')->name('dashboard');
    Route::get('candidates','candidate')->name('candidate');
    Route::DELETE('delete-user/{user}','destroy')->name('delete-user');
});

Route::controller(ExamController::class)->group(function (){
    Route::get('create-exam','show')->name('create-exam');
    Route::post('create-exam','store')->name('create-exam');

    Route::get('show-exams','showExam')->name('exams');
    Route::get('/view/{exam}', 'viewExam')->name('viewExam');
    Route::post('submit-exam', 'submitExam')->name('submit-exam');
});
