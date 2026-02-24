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

        public function surnamename()

        {
            return 'Helloooooo world';
        }
        // public function city($id)
        // {
        //     $users = [
		// 'user1' => 'city1',
		// 'user2' => 'city2',
		// 'user3' => 'city3',
		// 'user4' => 'city4',
		// 'user5' => 'city5',
        // ];
        
        //     if (isset($users($id))) {
        //         return $users[$id];
        //     }
        //     return 'такого юзера нет';
        // }
}