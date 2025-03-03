<?php

use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);