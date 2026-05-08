<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class TestController extends Controller
	{
		public function form(Request $request)
		{
			$request->flash();
			return view('test');
		}

		
		public function result(Request $request)
		{
			return $request->old('name') . ' ' . $request->old('age');
		}
	}
