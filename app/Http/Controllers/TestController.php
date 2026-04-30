<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function form(Request $request)
    {
        if ($request->isMethod('post')) {
            echo('!!');
        }
        else{
            echo('!');
        }
        return view('test');
    }
    public function result()
    {
        
    }
}
