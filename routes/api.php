<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimePeriodController;

Route::get('/time-period', [TimePeriodController::class, 'index']);
