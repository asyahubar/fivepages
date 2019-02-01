<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author', 'thumbnail', 'body', 'category', 'views', 'deleted_at', 'created_at', 'updated_at'
    ];

    protected static function boot ()
    {
        parent::boot();

        static::addGlobalScope(new ArticleScope);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
}