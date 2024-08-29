<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
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
         font-size: 20px;
         color: #000000;
     }
     .btn {
         font-size: 12px;
         font-weight: bold;
         display: inline-block;
         padding: 10px 20px;
         text-decoration: none;
         text-align: center;
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
     .alert {
         padding: 10px;
         margin-bottom: 18px;
         border-radius: 6px;
         color: #FFFFFF;
         font-size: 12px;
     }
     .alert-success {
         background-color: #1e7e34;
     }
     .alert-danger {
         background-color: #a40000;
     }
     .form-group {
         margin-bottom: 10px;
     }
     .form-group label {
         display: block;
         font-weight: bold;
         margin-bottom: 5px;
     }
     .form-group input .form-group textarea {
         width: 100%;
         padding: 8px;
         border-radius: 4px;
         border: 1px solid #ccc;
     }

         </style>
      </head>
<body>
<div class="container" >
    <h1>Create A New Task</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
                <li>{{$error}}</li>
@endforeach
        </ul>
        </div>
@endif

     <form action="{{route('tasks.store') }}" method="POST">
         @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>





</body>
</html>
