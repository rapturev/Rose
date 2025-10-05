<?php

use Illuminate\Support\Facades\Route;

Route::get('/feed', [PostFeedController::class, 'index']);

Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']);


