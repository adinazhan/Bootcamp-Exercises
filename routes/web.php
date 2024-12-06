<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\MyHomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\AuthorController;


Route::get('/', [MyHomepageController::class, 'homepage']);
Route::get('/about-us', [AboutUsController::class, 'about']);
Route::get('/api/test/array', [TestController::class, 'arrayResponse']);
Route::get('/api/test/model', [TestController::class, 'modelResponse']);
Route::get('/api/test/collection', [TestController::class, 'collectionResponse']);
Route::get('/books', [BookController::class, 'index']);
