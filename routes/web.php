<?php

use App\Http\Controllers\NovelsController;
use App\Http\Controllers\BookController;

Route::get('/novels', [NovelsController::class, 'index']);

Route::get('/buku', [BookController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BookController::class, 'create'])->name('book.create');
Route::post('/buku', [BookController::class, 'store'])->name('book.store');
Route::delete('/buku/{id}', [BookController::class, 'destroy'])-> name('book.destroy');
Route::get('/buku/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::put('/buku/{id}', [BookController::class, 'update'])->name('book.update');


