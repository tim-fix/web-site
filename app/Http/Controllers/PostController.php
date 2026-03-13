<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $titles = DB::table('posts')->get();

        foreach ($titles as $title) {
            dump($title);
        }
    }
}
