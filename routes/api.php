<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursuController;

Route::post('/kursi', [kursuController::class, 'store']);
Route::get('/kursi', [kursuController::class, 'index']);
