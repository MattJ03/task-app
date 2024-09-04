<x-layouts.app>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{old('title', $task->title)}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{old('description', $task->description) }} </textarea>
        </div>
        <div class="form-group">
            <label for="date">Due Date</label>
            <input type="date" id="due_date" name="due_date"
                   value="{{ old('due_date', $task->due_date ? date('Y-m-d', strtotime($task->due_date)) : '') }}">
        </div>
        <div class="form-group">
            <label for="time_to_complete">Time to complete task</label>
            <input type="number" id="time_to_complete"
                   name="time_to_complete value="{{old('time_to_complete', $task->time_to_complete)}}">
        </div>

        <button type="submit" class="btn btn-primary">Update Task</button>
        <a href="{{route('tasks.index')}}" class="btn btn-secondary">Cancel Updates</a>
    </form>
</x-layouts.app>
