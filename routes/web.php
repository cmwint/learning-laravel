<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// standard things needed:
//  controller => PostsController
//  eloquent model => post (singular)
//  migration => create_posts_table

// when we create a model, we can also have it create the controller and the migration

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

// Route::get('/posts/{posts}', 'PostsController@show');


// posts convention, using the exact same URI to represent different actions, use REQUEST type to instruct the server where to direct the request

// GET /posts
// GET /posts/create
// POST /posts
// GET /posts/{id}/edit
// GET /posts/{id}
// PATCH /posts/{id}
// DELETE /posts/{id}



// Route::get('/', function () {
//     $tasks = DB::table('tasks')->latest()->get();
    
//     // return $tasks;
//     return view('welcome', compact('tasks'));
// });

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');