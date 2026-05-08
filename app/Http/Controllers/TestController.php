<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
	
class TestController extends Controller
{
	public function setFlash(Request $request)
		{
			session()->flash('success','Выполнено успешно');
			return redirect()->route('show-flash');
		}
	public function showFlash(Request $request)
		{
			return view('test');
		}
}

