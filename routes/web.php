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

Route::get('tasks', 'TasksController@index');

use App\Task; // namespace, directoy structure, import task class

Route::get('/', function () {
    $tasks = DB::table('tasks')->latest()->get();

    // return $tasks;
    return view('welcome', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $task = Task::find($id);
    // Task::incomplete();
    // dd($tasks);
    
    return view('tasks.show', compact('task'));
});