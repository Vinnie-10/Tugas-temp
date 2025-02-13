<?php

use App\Http\Controllers\DataController;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'index']);
Route::get('/create', [DataController::class, 'getcreateData']);

Route::post('/create-data', [DataController::class, 'createData']);

Route::get('/employees', [DataController::class, 'index']);
