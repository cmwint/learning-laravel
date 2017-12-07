<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) // task::incomplete, but also treat as query scope
    {
        // taking a basic query and wrapping it in a method,
        // that describes exactly what it does
        return $query->where('completed', 0);

        // a query scope is just a wrapper around a particular query
        // allows you to write things like this in PHP artisan tinker
        //      App\Task::incomplete()->where('id', '>=', 2)->get();

    }
}
