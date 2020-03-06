<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'details',
        'image',
        'is_featured',
        'status',
        'total_read',
    ];
}
