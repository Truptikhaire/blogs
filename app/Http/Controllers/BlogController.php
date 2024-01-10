<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function create(Request $request)
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        return view('home');
    }

    public function edit($id)
    {
        return view('blog.edit');
    }

    public function update(Request $request)
    {
        return view('home');
    }
}
