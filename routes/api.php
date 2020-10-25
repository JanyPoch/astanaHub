<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::patch('{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('update');
        Route::post('{user}/image', [\App\Http\Controllers\UserController::class, 'postImage'])->name('postImage');
    });

});

Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
