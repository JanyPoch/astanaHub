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

Route::get('/lang/{locale}', [\App\Http\Controllers\IndexController::class, 'setLocale'])->name('lang.change');

Route::group(['domain' => '{domain}.' . env('APP_URL_SHORT')], function () {
    Route::get('/', [\App\Http\Controllers\PageController::class, 'web']);
});

Route::get('/', function () {
    return view('welcome');
});
