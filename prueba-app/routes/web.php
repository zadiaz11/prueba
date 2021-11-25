<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\LoginController;
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

Route::get('/gracias', function () {
    return view('gracias');
});

Route::get('/apply', 'App\Http\Controllers\ApplyController@index')->middleware('auth');
Route::get('/apply/edit/{id}/{estado}', [ApplyController::class, 'edit'])->middleware('auth');
Route::get('/apply/toApply', [ApplyController::class, 'create']);
Route::post('/apply/store', [ApplyController::class, 'store'])->middleware('auth');

Auth::routes();

Route::get('/home', [ApplyController::class, 'index'])->name('home');
