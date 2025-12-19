<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;

Route::post('/histories', [HistoryController::class, 'store']);
