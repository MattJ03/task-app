<x-layouts.app>
    <h1>Create A New Task</h1>



    <form action="{{route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Date to be Completed:</label>
            <input type="date" id="due_date" name="due_date">
        </div>

        <div class="form-group">
            <label for="time_to_complete">How long is the Task (minutes)</label>
            <input type="number" name="time_to_complete" id="time_to_complete" required min="1">
        </div>
        <div class="form-group">
            <label for="completed">Completed</label>
            <select name="completed" id="completed" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create New Task</button>
        <a href="{{route('tasks.index') }}" class="btn btn-primary">Back to List of Tasks</a>
    </form>
</x-layouts.app>
