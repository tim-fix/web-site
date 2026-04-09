<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function getAll(Request $request) 
    {
        
        $title = $request->input('title');
            $name = $request->input('name');
            $desc = $request->input('desc');
            $likes = $request->input('likes');
            $text = $request->input('text');
            $date = $request->input('date');
    
    $posts = Posts::all();
    $posts->title = $title;
    $posts->desc = $desc;
    $posts->likes = $likes;
    $posts->text = $text;
    $posts->date = $date;
    $posts->name = $name;
    return view('test', [
        'var1' => $name,
        'var2' => $desc,
        'var3' => $likes,
        'var4' => $text,
        'var5' => $date,
    ]);
    }
    public function getOne($id)
    {
        $posts = Posts::orderBy('created_at')->get();
        dd($posts);
    }
    public function post()
    {

    }
    public function newPost(Request $request)
    {
            $title = $request->input('title');
            $name = $request->input('name');
            $desc = $request->input('desc');
            $likes = $request->input('likes');
            $text = $request->input('text');
            $date = $request->input('date');
    
    $posts = Posts::all();

    $posts = new Posts;
    $posts->title = $title;
    $posts->desc = $desc;
    $posts->likes = $likes;
    $posts->text = $text;
    $posts->date = $date;
    $posts->name = $name;
    $posts->save();
    return view('test', [
        'var1' => $name,
        'var2' => $desc,
        'var3' => $likes,
        'var4' => $text,
        'var5' => $date,
    ]);
    }
    public function rework()
    {
        $posts = Posts::find(1);
        $posts->title = 'Новый заголовок записи с id 1';
        $posts->desc = "Новое описание записи с id 1";
        $posts->save();
        echo 'новый title';
    }

    public function editPost(Request $request, $id)
    {
            $posts = Posts::find($id);
            if ($request->has('submit')) {
				$posts->title = $request->title;
				$posts->desc  = $request->desc;
				$posts->date  = $request->date;
				$posts->text  = $request->text;
				
				$posts->save(); 

            }
            return view('editPost', ['posts' => $posts]);
    }
    public function first()
    {
        $posts = Posts::firstOrCreate(['title' => 'Flight 10']);
    }

    public function delPost($id)
    {
        $posts = Posts::find($id);
        $posts->delete();
    }
    public function getDeletedPost()
    {
        $posts = Posts::find(1);
        $posts->delete();
        $deletedPosts = Posts::onlyTrashed()->get();
        return view('posts', [
            'var1' => $deletedPosts,
        ]);
        
    }
    public function restorePost(Request $request)
    {
        $id = $request->input('id');
        $posts = Posts::withTrashed()->find(1);
        $posts->restore($id);
        return view('deleted', [
            'var1' => $id
        ]);
    }
}