<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::resource('clients',      App\Http\Controllers\ClientController::class);
    Route::resource('employees',  App\Http\Controllers\EmployeeController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/employee-types',  App\Http\Controllers\EmployeeTypesController::class);
    Route::resource('/departaments',  App\Http\Controllers\DepartmentController::class);

    Route::resource('counters',     App\Http\Controllers\CounterController::class);
    Route::get('/counter/new', [App\Http\Controllers\CounterController::class, 'new_counter'])->name('counter.new');
    Route::post('/counter/create', [App\Http\Controllers\CounterController::class,'save_counter'])->name('counter.save');

    Route::resource('recharges',       App\Http\Controllers\RechargeController::class);
    Route::resource('sell-recharges',  App\Http\Controllers\SellController::class);
    Route::post('/second-via',  [App\Http\Controllers\SellController::class,'secondVia'])->name('second.via');

    Route::get('/profile', [App\Http\Controllers\ProfileController::class,'index'])->name('profile');
    Route::post('/profile/update', [App\Http\Controllers\ProfileController::class,'updateProfile'])->name('profile.update');
    Route::get('/logout', [App\Http\Controllers\HomeController::class,'logout'])->name('logout');



});

