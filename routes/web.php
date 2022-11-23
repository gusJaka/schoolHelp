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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\School::class, 'index'])->name('dashboardSchool');
Route::get('/manage-users', [App\Http\Controllers\Users::class, 'index'])->name('manageUsers');
Route::post('/register-school-admin', [App\Http\Controllers\HomeController::class, 'createSchool'])->name('registerSchoolAdmin');
Route::post('/register-school', [App\Http\Controllers\School::class, 'store'])->name('registerSchool');
