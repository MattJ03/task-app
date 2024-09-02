<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Define the root route to redirect to tasks.index
Route::get('/', function () {
return redirect()->route('tasks.index');
});

// Resource route for TaskController
Route::resource('tasks', TaskController::class);


