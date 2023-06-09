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

Route::group(['namespace' => 'Books', 'prefix' => 'books'], function () {
    Route::get('/', [App\Http\Controllers\API\Books\IndexController::class, 'index']);
    Route::get('/{book}', [App\Http\Controllers\API\Books\ShowController::class, 'show']);
    Route::patch('/{book}', [App\Http\Controllers\API\Books\UpdateController::class, 'update']);
    Route::group (['middleware'=>['auth_api']], function () {
        //Route::get('/{book}', [App\Http\Controllers\API\Books\ShowController::class, 'show']);
        //Route::put('/{book}', [App\Http\Controllers\API\Books\UpdateController::class, 'update']);
        Route::delete('/{book}', [App\Http\Controllers\API\Books\DeleteController::class, 'destroy']);
    });
});
Route::group(['namespace' => 'Genres', 'prefix' => 'genres'], function () {
    Route::get('/', [App\Http\Controllers\API\Genres\IndexController::class, 'index']);
});
Route::group(['namespace' => 'Authors', 'prefix' => 'authors'], function () {
    Route::get('/', [App\Http\Controllers\API\Authors\IndexController::class, 'index']);
    Route::get('/{author}', [App\Http\Controllers\API\Books\ShowController::class, 'show']);
    Route::patch('/{author}', [App\Http\Controllers\API\Authors\UpdateController::class, 'update']);
});

