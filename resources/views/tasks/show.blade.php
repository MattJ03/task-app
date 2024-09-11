<x-layouts.app>
    <div class="container">
        <h1> {{$task->title}}</h1>

        <p><strong>Description:</strong> {{$task->description ?? 'No description given'}}</p>
        <p><strong>Time to complete</strong> {{$task->time_to_complete }} minutes</p>
        <p><strong>Completed</strong> {{$task->completed}} ? 'Yes' : 'No'</p>

        <!-- button to go to the edit page for the selected task-->
        <a href="route {{'tasks.edit', $task->id }}" class="btn btn-primary">Edit Task</a>

        <form action="route {{'tasks.destroy', $task->id }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE');
            <button type="submit" class="btn btn-danger">Delete Task</button>
        </form>

        <!--button to go back to the home page-->
        <a href="route {{'tasks.index'}}" class="btn btn-secondary">Back to Home</a>

    </div>
</x-layouts.app>
