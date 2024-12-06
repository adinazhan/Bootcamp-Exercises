<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ReviewController;

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors/store', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/{book_id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::post('/book/update', [BookController::class, 'update'])->name('book.update');
Route::get('/book/{book_id}', [BookController::class, 'show'])->name('book.show');
Route::post('/book/{book_id}/review', [ReviewController::class, 'store'])->name('review.store');
Route::post('/review/update', [ReviewController::class, 'update'])->name('review.update');
