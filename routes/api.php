<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;


Route::get('/books/latest', [BookController::class, 'latest']);
