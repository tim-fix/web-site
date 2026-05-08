<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	
	class TestController extends Controller
	{
		public function show()
		{
			return response()->view('test')->header('Content-Type', 'text/plain');
		}
	}

