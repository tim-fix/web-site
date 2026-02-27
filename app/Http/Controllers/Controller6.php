<?php

namespace App\Http\Controllers;

class Controller6 extends Controller
{
    public function show()

        {		
		    $collection = collect([1, 2, 3]);
            return $collection;
		}
}