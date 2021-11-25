<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplyController;
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
Route::get('/apply', 'App\Http\Controllers\ApplyController@index');
Route::get('/apply/edit/{id}', [ApplyController::class, 'edit']);