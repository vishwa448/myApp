<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    // return view('welcome');
    return view('admin.dashboard');  // looks for resources/views/admin/dashboard.blade.php
});


Route::get('/', function () { //Overwrite the default route
    return 'Welcome to the Homepage!';
});

Route::get('/about', function () {
    return 'This is the About page.';
});

Route::get('/post/{id}', function ($id) {
    return "This is post $id.";
});
