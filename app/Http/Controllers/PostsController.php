<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // dd(request(['title', 'body']));
        // create a new post using the request data
        
        // $post = new \App\Post; // \ begin at the root, not the current directory
        // $post->title = request('title');
        // // $post->body = request('body');

        // save it to the database
        // $post->save();

        // vaildation
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // mass assigning all of the fields, security concern
        // can't let the user just submit whatever they want
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        // then redirect somewhere else in our application, like home page
        return redirect('/');
    }
}
