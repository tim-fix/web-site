<?php

namespace App\Http\Controllers;

class Number5Controller extends Controller
{
    public function show()

        {		
		    return view('post.show',[
                'username' => 'ivan',
                'userage' => '18',
                'usersalary' => '500',
                'usersalary' => '500',
                'style' => 'color:red',
                'value1' => 'value1',
                'value2' => 'value2',
                'value3' => 'value3',
                'text' => 'sometext',
                'href' => 'http://ntpftxm-m1.prof.ru/public',
                'date' => '24.02.2026',
                'city' => '',
                'year' => '',
                'month' => '',
                'day' => '',
                'str' => 'text',
                'age' => '19',
                'userage' => '12',
                'arr' => [1,2,3],
                'arr2' => ['str','str2','str3'],
            ]);
		}
}