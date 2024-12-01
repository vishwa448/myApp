<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //define the method
    public function index()
    {
        return view('post.index');
    }

    //create method
    public function create()
    {
        return view('post.create');
    }

    //show method
    public function show($id)
    {
        return view('post.show', compact('id'));
    }
}
