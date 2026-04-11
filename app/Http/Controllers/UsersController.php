<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profiles()
    {

        $users = Users::whereIn('id', [1,2])->get();
        return view('profiles', [
            'var1' => $users,
        ]);
    }
}