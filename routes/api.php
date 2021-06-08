<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);
Route::post('logout', LogoutController::class);

Route::middleware('auth:api')->group(function () {
    Route::post('create-article', [ArticleController::class, 'store']);
    Route::patch('update-article/{article:slug}', [ArticleController::class, 'update']);
    Route::delete('delete-article/{article:slug}', [ArticleController::class, 'destroy']);
});

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{article:slug}', [ArticleController::class, 'show']);



Route::get('user', UserController::class);
