<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
