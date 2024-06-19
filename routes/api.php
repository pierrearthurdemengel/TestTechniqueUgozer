<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'apiIndex']);
Route::get('/articles/{article}', [ArticleController::class, 'apiShow']);
Route::post('/articles', [ArticleController::class, 'apiStore']);
Route::put('/articles/{article}', [ArticleController::class, 'apiUpdate']);
Route::patch('/articles/{article}', [ArticleController::class, 'apiUpdate']);
Route::delete('/articles/{article}', [ArticleController::class, 'apiDestroy']);
