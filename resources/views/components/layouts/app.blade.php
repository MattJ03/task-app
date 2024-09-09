<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>

<header>
    <nav>
        Task List 1.0
    </nav>
</header>

<main class="container m-">
{{--    alert--}}
    <div>
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

    </div>
    {{$slot}}
</main>
</body>
</html>

