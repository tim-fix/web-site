<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function getAll($order = 'created_at') 
    {
        $posts = Posts::orderBy($order)->get();

        dd($posts);
    }
    public function getOne($id)
    {
        $posts = Posts::orderBy('created_at')->get();
        dd($posts);
    }
}
