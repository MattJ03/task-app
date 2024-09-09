<x-layouts.app>
    <div class="container">
        <h1> {{$task->title}}</h1>  //heading based on selected individual task

        <p><strong>Description:</strong> {{$task->description ?? 'No description'}}</p>


    </div>
</x-layouts.app>
