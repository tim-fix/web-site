<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desc;

class DescController extends Controller
{
    public function first_screen()
    {
        return view('first');
    }
    public function desc(Request $request)
    {
    if ($request->isMethod('post') && $request->has('name')) {
        $desc = new Desc;
        $desc->name = $request->input('name');
        $desc->comment = $request->input('comment');
        $desc->save();
    }
    $descs = Desc::all();

    return view('desc', [
        'descs' => $descs,
        'var1'  => $request->input('name'),
        'var2'  => $request->input('comment'),
    ]);
    }
}
