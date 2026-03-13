<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $titles = DB::table('posts')->select('title', 'text')->get();

        dump($titles);
    }
}
