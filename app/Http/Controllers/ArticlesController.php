<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Convention says to name the main
     * controller is called 'index'
     */
    public function index()
    {
        $articles = Post::all();
        return view('articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Post::find($id);
        return view('articles', compact('article'));
    }

    public function store(Request $request)
    {
        /*
         * To append additional data $request->merge([]) may be used
         *
         * Maybe there's a way to use a mutator
         *
         * To create a unique slug we created a new method,
         * that checks if there are slugged titles like
         * this one and adds an integer
         */
        Post::create($request->all());
    }
}
