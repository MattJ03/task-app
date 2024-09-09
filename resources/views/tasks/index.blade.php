<x-layouts.app>
    <h1>Task List 1.0</h1>
    <!-- some quick code to  pop up a success message -->


    <!-- Get to the task creator page -->
    <a href="{{route('tasks.create')}}" class="btn btn-primary">Create New Task</a>

    <!-- Tomorrow continue reading docu on built in php methods and add another to check if the stack is empty and even add a default task -->
    @if($tasks->isEmpty())
        <p>You Have 0 Tasks</p>

    @else
        <!-- Show the full list-->

        <table>
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Time to Complete</th>
                <th>Completed</th>
                <th>Task Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->time_to_complete }} mins</td>
                    <td>{{ $task->completed ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{route('tasks.edit', $task->id) }} " class="btn btn-secondary">Edit</a>
                        <a href="{{route('tasks.show', $task->id)}}" class="btn btn-secondary">View</a>
                        <form action="{{route('tasks.destroy', $task->id)}} " method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

</x-layouts.app>
