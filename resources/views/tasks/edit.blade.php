<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Edit Tasks</title>
    <style>
        .body {
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
            border: 1px, #cccccc;
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
            <textarea id="description" name="description">{{old('description', $Task->description) }}</textarea>
        </div>
        <div class="form-group"
        </div>

    </form>
</div>
</body>
</html>
