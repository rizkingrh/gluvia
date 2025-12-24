<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;

Route::post('/history', [HistoryController::class, 'store']);
