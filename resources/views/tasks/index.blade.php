<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Task List</title>
<style>
    body {
        font-family: Helvetica, Arial, sans-serif;
        background-color: #005cbf;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px; /*make sure the structure is correct ad that nothing goes off the screen*/
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff; /* basic white background*/
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /*if ive implemented this right this could look cool*/
    }
    h1 {
        font-size: 26px;
        color: #000000;
    }
    .btn {  /* this is the stying for my general buttons used throughout this page */
    display: inline-block;
        padding: 10px 20px;
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
    /* Styling for my main buttons */
    .btn-primary {
        background-color: #007bff; /* Blue background color */

    }
    /* activated when the users cursor in on top of the */
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-secondary {
        background-color: #95999c;
    }
    .btn-secondary:hover {
        background-color: #74787e;
    }
    .btn-danger {  /*button used for deletion*/
        background-color: red;
    }
    .btn-danger:hover {
        background-color: darkred;
    }
    .alert {
        padding: 10px;
        margin-bottom: 18px;
        border-radius: 5px;
        color: #FFFFFF;
        font-size: 14px;

    }
    .alert-success {
        background-color: green;
        color: darkgreen;
    }
    .alert-danger {
        background-color: red;
        color: darkred;
    }
    /* style design of tables*/
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 18px;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }
    th {
        background-color: mediumblue;
        color: #FFFFFF;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2; /* Light gray background for even rows */
    }
    </style>
</head>
<body>
<div class="container">

    <h1>Task List 1.0</h1>
    <!-- some quick code to  pop up a success message -->

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success') }}
    </div>
    @endif

        <!-- Show an error message -->
    @if(session('error'))
<div class="alert alert-danger">
    {{session('error') }}
</div>
    @endif

<!-- Get to the task creator page -->
         <a href="{{route('tasks.create')}}" class="btn btn-primary">Create New Task</a>

    <!-- Tomorrow continue reading docu on built in php methods and add another to check if the stack is empty and even add a default task -->
    @if($tasks->isEmpty())
    <p>You Have 0 Tasks</p>

    @else
<!-- print the list to the screen -->

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
             <form action = "{{route('tasks.destroy', $task->id)}} " method="POST" style="display: inline;">
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
</div>
</body>
</html>






