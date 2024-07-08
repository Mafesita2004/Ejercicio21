<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ViajeroController;
use App\Http\Controllers\ViajeController;

Route::resource('viajeros', ViajeroController::class);
Route::resource('viajes', ViajeController::class);
