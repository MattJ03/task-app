<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Define the root route to redirect to tasks.index
Route::get('/', function () {
return redirect()->route('tasks.index');
});

// Resource route for TaskController
 Route::resource('tasks', TaskController::class);
  //Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
  //Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
  //Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
  //Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
  //Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
  //Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
 // Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
