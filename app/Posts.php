<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $attributes = [
        'likes' => 0,
        'dislikes' => 0
    ];
}
