<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tasks</title>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            background-color: #0056b3;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px;
            padding-bottom: 20px;
            background-color: #FFFFFF;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 26px;
            color: #040505;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        textarea {
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #cccccc;
        }
.btn {
    padding: 10px 20px;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    border-radius: 5px;
    color: #FFFFFF;
    border: none;
    cursor: pointer;
    margin: 6px;

  }
.btn-primary {
    background-color: #007bff;
}
.btn-primary:hover {
    background-color: #0056b3;
}
.btn-secondary {
    background-color: #95999c;
}
.btn-secondary:hover {
    background-color: #74787e;
}
.btn-danger {
    background-color: red;
}
.btn-danger:hover {
    background-color: darkred;
}
    </style>
</head>
<body>
<div class="container">
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
            <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date ? date('Y-m-d', strtotime($task->due_date)) : '') }}">        </div>
        <div class="form-group">
            <label for="time_to_complete">Time to complete task</label>
            <input type="number" id="time_to_complete" name="time_to_complete value="{{old('time_to_complete', $task->time_to_complete)}}">
        </div>

        <button type="submit" class="btn btn-primary">Update Task</button>
        <a href="{{route('tasks.index')}}" class="btn btn-secondary">Cancel Updates</a>
    </form>
</div>
</body>
</html>
