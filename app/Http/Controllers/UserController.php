<?php



namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show()

        {		
			return 'Hello world';
		}
        
    public function all()
        {
        return view('post.show',[
				'text'=>'Hello worldddddd',
			]);
        }
        public function name()

        {
            return 'HHHHHello world';
        }
}