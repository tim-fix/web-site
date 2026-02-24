<?php

namespace App\Http\Controllers;

class Number5Controller extends Controller
{
    public function show()

        {		
		    return view('post.show',[
                'username' => 'ivan',
                'userage' => '18',
                'usersalary' => '500'
            ]);
		}
}