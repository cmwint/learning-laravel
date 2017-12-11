<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // saying that these fields are okay being mass assigned

    // $fillable === whitelisting
    // $guarded === the inverse
    protected $guarded = [];
}
