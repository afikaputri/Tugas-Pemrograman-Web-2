<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/trash', [MovieController::class, 'trash']);
Route::get('/restore/{id}', [MovieController::class, 'restore']);
Route::get('/force-delete/{id}', [MovieController::class, 'forceDelete']);
Route::get('/create', [MovieController::class, 'create']);
Route::post('/store', [MovieController::class, 'store']);
Route::get('/edit/{id}', [MovieController::class, 'edit']);
Route::post('/update/{id}', [MovieController::class, 'update']);
Route::get('/delete/{id}', [MovieController::class, 'destroy']);