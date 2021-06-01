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

Route::middleware(['auth'])->group(function() {
    Route::get('/', 'App\Http\Controllers\UserController@index');
    Route::get('/profiel/{id}', 'App\Http\Controllers\UserController@profiel');
    Route::get('/dierenlijst', 'App\Http\Controllers\UserController@dierenlijst');
    Route::get('/maakdier', 'App\Http\Controllers\UserController@maakdier');
    Route::get('/dierenlijst/{number}', 'App\Http\Controllers\UserController@showdier');
    
    Route::post('/dierenlijst/{number}', 'App\Http\Controllers\UserController@slaverzoekop');
    Route::post('/maakdier', 'App\Http\Controllers\UserController@store');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
