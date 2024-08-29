<?php

use Illuminate\Support\Facades\Route;

route::get('/', function() {
    return view('welcome');
});
route::get('/create', function() {
    return view('tasks.create');
});

route::get('/edit', function () {
    return view('tasks.edit');
});

