<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// should map to all needed pages and complte CRUD from TC
route::get('/', [TaskController::class, 'index']);
Route::resource('tasks', TaskController::class);
