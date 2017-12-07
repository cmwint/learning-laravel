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

// Route::get('/', function () {
//     $tasks = DB::table('tasks')->latest()->get();
    
//     // return $tasks;
//     return view('welcome', compact('tasks'));
// });

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');