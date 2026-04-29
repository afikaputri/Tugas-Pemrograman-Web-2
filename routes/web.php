<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);

Route::get('/create', [MovieController::class, 'create']);
Route::post('/store', [MovieController::class, 'store']);
Route::get('/edit/{id}', [MovieController::class, 'edit']);
Route::post('/update/{id}', [MovieController::class, 'update']);