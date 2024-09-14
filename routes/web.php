<?php

use App\Http\Controllers\NovelsController;
use App\Http\Controllers\BookController;

Route::get('/novels', [NovelsController::class, 'index']);

Route::get('/buku', [BookController::class, 'index']);



