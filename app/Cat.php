<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    /**
     * @return array
     */
    public function users()
    {
        return $this->belongsTo('\App\User');
    }

    protected $fillable = [
        'name', 'age', 'gender', 'created_at', 'updated_at'
    ];
}
