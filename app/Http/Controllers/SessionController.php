<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class SessionController extends Controller
{
    public function session(Request $request)
    {
        // $value = $request->session()->get('counter', 1);
        // $request->session()->put('counter', $value + 1);
        // echo $value;

        // $request->session()->put('arr', ['1', '2', '3']);
        // $request->session()->push('arr', '4');
        // $value = $request->session()->get('arr');
        // dd($value);

        $request->session()->put('key', '1');
        $request->session()->forget('key');
        $value = $request->session()->get('key');
        dd($value);
    }
}
