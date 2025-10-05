<?php

use Illuminate\Support\Facades\Route;

Route::get('/feed', [PostFeedController::class, 'index']);

