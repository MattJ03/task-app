<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show the user their tasks
    public function index(Request $request)
    {
       $search = $request->input('search');
       if($search) {
         $tasks = Task::where('title', 'like', "%{$search}%")
             ->orWhere('description', 'like', "%{$search}%")
             ->get();
       }
       else {
           $tasks = Task::all();
       }
       return view('tasks.index', ['tasks' => $tasks]);
    }
     public function show(Task $task) {

         return view('tasks.show', ['task' => $task]);

        //dd($task);
     }

    // Form for creating more tasks to add
    public function create()
    {
        return view('tasks.create');
    }

    // Store a newly created task in storage
    public function store(Request $request)
    {
        $this->validateTask($request); // Validate request data

        Task::create($request->all()); // Create new task

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    // form in order to edit a task
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    // update a selected task
    public function update(Request $request, Task $task)
    {
        $this->validateTask($request); // Validate request data

        $task->update($request->all()); // Update task

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    // remove a task no longer wanted
    public function destroy(Task $task)
    {
        $task->delete(); // Delete task

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    // validate a task entered
    private function validateTask(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'time_to_complete' => 'nullable|integer',
        ]);
    }
}
