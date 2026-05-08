<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $counter = (int)$request->cookie('page_views', 0);
        

        $newCounter = $counter + 1;
        

        $response = Response::make(view('test', [
            'counter' => $newCounter
        ]));
        

        return $response->cookie(
            'page_views',
            $newCounter,
            60
        );
    }
}
