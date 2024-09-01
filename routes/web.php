<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// should map to all needed pages and complte CRUD from TC
Route::resource('tasks', TaskController::class);
