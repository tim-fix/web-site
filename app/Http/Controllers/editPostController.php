<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
    use App\Models\editPost;
	
	class PostController extends Controller
	{
		public function editPost()
		{
			return view('editPost');
		}
	}
