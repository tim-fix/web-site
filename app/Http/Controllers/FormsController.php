<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;

class FormsController extends Controller
{
     public function showPath(Request $request)
    {
        // return $request->path();
        // return $request->url();
        // return $request->fullUrl();
        return $request->fullUrlWithQuery(['page' => '1']);
    }
}