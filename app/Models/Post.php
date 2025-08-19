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
        'comment'
=======
        'comment',
>>>>>>> 7fea4dd5693bff8fdb5326ca977cd4786e08e7dd
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
