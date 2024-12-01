<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome";
});

Route::get('/about', function () {
    return "this is the about page";
});

Route::get('/post/{id}', function ($id) {
    return "This is the post with id: $id";
});