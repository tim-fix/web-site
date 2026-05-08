<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\Test;

class TestController extends Controller
{
    public function form()
    {
        return view('testform');
    }

    public function result(Request $request)
    {
        $num = $request->input('number');
        $result = $num * $num;
        var_dump($result);  
    }
}
