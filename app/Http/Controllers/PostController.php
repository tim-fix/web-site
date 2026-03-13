<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $titles = DB::table('users')->select('email as user_email')->get();

        dump($titles);
    }
}
