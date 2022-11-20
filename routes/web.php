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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/resources', [App\Http\Controllers\HomeController::class, 'resources'])->name('resources');
Route::get('/job-area', [App\Http\Controllers\HomeController::class, 'job_area'])->name('job_area');
Route::get('/multimedia', [App\Http\Controllers\HomeController::class, 'multimedia'])->name('multimedia');
Route::get('/job-home', [App\Http\Controllers\HomeController::class, 'job_home'])->name('job_home');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
