<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'status', 'body', 'date'
    ];
}
