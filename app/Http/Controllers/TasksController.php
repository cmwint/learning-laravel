<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index(
    {
        // $tasks = DB::table('tasks')->find($id); // query builder
        $tasks = Task::all(); // using eloquent in a dedicated class

        // return $tasks;
        return view('tasks.index', compact('tasks'));
    }
}
