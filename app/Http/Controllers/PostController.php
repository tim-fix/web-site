<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $titles = DB::table('users')
            ->where('age', '>', 20)
            ->where('age', '<', 30)
            ->get();

        dump($titles);
    }
}
