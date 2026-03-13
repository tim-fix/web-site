<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $titles = DB::table('users')
            ->where('age', '=', 30)
            ->orwhere('salary', '=', 2222)
            ->orwhere('id', '>', '1')
            ->get();

        dump($titles);
    }
}
