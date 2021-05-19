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

Route::get('/', [App\Http\Controllers\FormController::class, 'index'])->name('home');
Route::get('/conclusion', [App\Http\Controllers\FormController::class, 'show'])->name('conclusion');
Route::post('/', [App\Http\Controllers\FormController::class, 'store']);
