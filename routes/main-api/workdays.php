<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Workdays\WorkdaysController;

Route::get('/list/{userId}', [WorkdaysController::class, 'list']);
