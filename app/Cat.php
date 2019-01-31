<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'name', 'age', 'gender', 'created_at', 'updated_at'
    ];
}
