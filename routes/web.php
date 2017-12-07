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

use App\Task; // namespace, directoy structure, import task class

Route::get('/', function () {
    $tasks = DB::table('tasks')->latest()->get();

    // return $tasks;
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function () {
    // $tasks = DB::table('tasks')->find($id); // query builder
    $tasks = Task::all(); // using eloquent in a dedicated class

    // return $tasks;
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $task = Task::find($id);
    // Task::incomplete();
    // dd($tasks);
    
    return view('tasks.show', compact('task'));
});