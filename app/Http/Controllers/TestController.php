<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function form(Request $request)
    {
        if ($request->has('num')) {
            var_dump($request->input('num') * 2);
        }

        return view('test');
    }
}
