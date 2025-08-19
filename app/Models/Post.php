<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
<<<<<<< HEAD
        'comment',
=======
        'comment'
>>>>>>> b334f07d98354510ba81a48ae47529be2abb2f54
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
