<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profiles($id)
    {
        $user = Users::find();
        $name = $user->profiles->name;
        return([
            $user->login,
            $user->password
        ]);
    }
}
