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
    Route::get('/review/{id}', 'App\Http\Controllers\UserController@review');
    Route::get('/error/{id}', 'App\Http\Controllers\UserController@error');
    Route::post('/review/{id}', 'App\Http\Controllers\UserController@slareviewop');

    Route::get('/dierenlijst', 'App\Http\Controllers\DierenController@dierenlijst');
    Route::get('/maakdier', 'App\Http\Controllers\DierenController@maakdier');
    Route::get('/dierenlijst/{id}', 'App\Http\Controllers\DierenController@showdier');
    Route::get('/dierenlijst/verwijder/{dier}', 'App\Http\Controllers\DierenController@verwijderDier');
    Route::post('/maakdier', 'App\Http\Controllers\DierenController@store');
    
    Route::get('/weiger/{dier}/{id}', 'App\Http\Controllers\VerzoekController@weigerVerzoek');
    Route::get('/accepteer/{dier}/{id}/{user}', 'App\Http\Controllers\VerzoekController@accepteerVerzoek');
    Route::get('/algereageerd', 'App\Http\Controllers\VerzoekController@algereageerd');
    Route::get('/eigenaar', 'App\Http\Controllers\VerzoekController@eigenaar');
    Route::post('/dierenlijst/{number}', 'App\Http\Controllers\VerzoekController@slaverzoekop');

    Route::get('/imageUpload', 'App\Http\Controllers\ImageUploadController@imageUpload');
    Route::get('/tegroot', 'App\Http\Controllers\ImageUploadController@tegroot');
    Route::post('/imageUpload', 'App\Http\Controllers\ImageUploadController@imageUploadPost');

    
});

Route::middleware(['auth', 'admin', 'banned'])->group(function() {
    Route::get('/admin', 'App\Http\Controllers\AdminController@show');
    Route::post('/admin', 'App\Http\Controllers\AdminController@ban');
    
});

Route::middleware(['auth'])->group(function() {
    Route::get('/BANNED', 'App\Http\Controllers\BannedController@show');
});






require __DIR__.'/auth.php';
