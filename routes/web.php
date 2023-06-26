<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoController;
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
    return view('main');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/programming-language', 'Show')->name('favorite');

    Route::get('/programming-language/{name}', 'ShowFavorite')->name('show')->where(['name' => '[a-zA-Z\s!@#$%^&*()-+]+',]);
});


Route::controller(InfoController::class)->group(function(){
    Route::get('/info/edit', 'InfoPage')->name('info.edit');
    Route::get('/info/update', 'UpdateInfo')->name('info.update');
});
