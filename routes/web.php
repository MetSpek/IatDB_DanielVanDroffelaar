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

Route::middleware(['auth', 'banned'])->group(function() {
    Route::get('/', 'App\Http\Controllers\UserController@index');
    Route::get('/profiel/{id}', 'App\Http\Controllers\UserController@profiel');
    Route::get('/dierenlijst', 'App\Http\Controllers\UserController@dierenlijst');
    Route::get('/maakdier', 'App\Http\Controllers\UserController@maakdier');
    Route::get('/dierenlijst/{id}', 'App\Http\Controllers\UserController@showdier');
    Route::get('/review/{id}', 'App\Http\Controllers\UserController@review');

    Route::get('/weiger/{dier}/{id}', 'App\Http\Controllers\UserController@weigerVerzoek');
    Route::get('/accepteer/{dier}/{id}/{user}', 'App\Http\Controllers\UserController@accepteerVerzoek');
    Route::get('/dierenlijst/verwijder/{dier}', 'App\Http\Controllers\UserController@verwijderDier');
    
    Route::post('/dierenlijst/{number}', 'App\Http\Controllers\UserController@slaverzoekop');
    Route::post('/maakdier', 'App\Http\Controllers\UserController@store');
    Route::post('/review/{id}', 'App\Http\Controllers\UserController@slareviewop');

    Route::get('/imageUpload', 'App\Http\Controllers\ImageUploadController@imageUpload');
    Route::post('/imageUpload', 'App\Http\Controllers\ImageUploadController@imageUploadPost');

    
});

Route::middleware(['auth', 'admin', 'banned'])->group(function() {
    Route::get('/admin', 'App\Http\Controllers\AdminController@show');
    Route::post('/admin', 'App\Http\Controllers\AdminController@ban');
    
});

Route::middleware(['auth'])->group(function() {
    Route::get('/BANNED', 'App\Http\Controllers\BannedController@show');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
