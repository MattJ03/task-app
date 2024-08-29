<?php

use Illuminate\Support\Facades\Route;

route::get('tasks/welcome', function () {
    return view('tasks.welcome');
});

route::get('/create', function() {
    return view('tasks.create');
});

route::get('/edit', function () {
    return view('tasks.edit');
});

