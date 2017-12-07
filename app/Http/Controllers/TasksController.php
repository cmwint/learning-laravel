<?php

namespace App\Http\Controllers;

use App\Task;  // namespace, directoy structure, import task class

class TasksController extends Controller
{
    public function index()
    {
        // $tasks = DB::table('tasks')->find($id); // query builder
        $tasks = Task::all(); // using eloquent in a dedicated class

        // return $tasks;
        return view('tasks.index', compact('tasks'));
    }

    public function show($id) //accept id
    {
        $task = Task::find($id);
        // Task::incomplete();
        // dd($tasks);
        
        return view('tasks.show', compact('task'));
    }
}
