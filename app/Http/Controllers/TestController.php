<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
	
class TestController extends Controller
{
	public function form(Request $request)
		{
			// Если форма была отправлена...
			if ($request->has('num')) {
				// Получим отправленное число:
				$num = $request->input('num');
				
				// Если выполняется условие...
				if ($num >= 0 and $num <= 10) {
					// Выполним редирект с данными формы:
					return redirect('test/result')->withInput();
				} else {
					// Условие не выполнено - опять покажем форму:
					return view('test');
				}
			} else {
				// Если форма не была отправлена...
				return view('test'); // покажем представление с формой
			}
		}
		
		public function result(Request $request)
		{
			// После редиректа выведем на экран данные формы:
			return $request->input('num');
		}
	}

