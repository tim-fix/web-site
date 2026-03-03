<?php

namespace App\Http\Controllers;

class Controller6 extends Controller
{
    public function show()

        {		
		    $collection = collect([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [10, 11, 12],
]);

$collapsed = $collection->collapse();

return $collapsed->all();
		}
}