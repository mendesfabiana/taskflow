<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreController;

Route::get('/sobre', [SobreController::class, 'index']);