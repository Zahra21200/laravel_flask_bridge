<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseasePredictionController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/predict', [DiseasePredictionController::class, 'predict']);
