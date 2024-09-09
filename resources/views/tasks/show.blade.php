<x-layouts.app>
    <div class="container">
        <h1> {{$task->title}}</h1>  //heading based on selected individual task

        <p><strong>Description:</strong> {{$task->description ?? 'No description given'}}</p>
        <p><strong>Time to complete</strong> {{$task->time_to_complete }} minutes</p>
        <p><strong>Completed</strong> {{$task->completed}} ? 'Yes' : 'No'</p>

        //button to edit the task
        <a href="route {{'tasks.edit', $task->id }}" class="btn btn-primary">Edit Task</a>

        <form action="route {{'tasks.destroy', $task->id }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE');
            <button type="submit" class="btn btn"
        </form>

    </div>
</x-layouts.app>
