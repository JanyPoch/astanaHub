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
    Route::get('my', [\App\Http\Controllers\UserController::class, 'my'])->name('my');
    Route::group(['prefix' => 'users'], function () {
        Route::patch('{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('update');
        Route::post('{user}/image', [\App\Http\Controllers\UserController::class, 'postImage'])->name('postImage');
    });
    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', [\App\Http\Controllers\TagController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\TagController::class, 'store'])->name('store');
        Route::patch('{tag}', [\App\Http\Controllers\TagController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\CategoryController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'startups'], function () {
        Route::post('/', [\App\Http\Controllers\StartupController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'pages'], function () {
        Route::post('/', [\App\Http\Controllers\PageController::class, 'store'])->name('store');
        Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');
        Route::get('{page}', [\App\Http\Controllers\PageController::class, 'show'])->name('show');
    });
    Route::get('cities', [\App\Http\Controllers\CityController::class, 'index']);
    Route::get('countries', [\App\Http\Controllers\CountryController::class, 'index']);
    Route::get('industries', [\App\Http\Controllers\IndustryController::class, 'index']);

    Route::group(['prefix' => 'amo-crm'], function () {
        Route::get('tasks', [\App\Http\Controllers\AmoController::class, 'getTasks'])->name('getTasks');
        Route::get('leads', [\App\Http\Controllers\AmoController::class, 'getLeads'])->name('getLeads');
    });

});

Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
