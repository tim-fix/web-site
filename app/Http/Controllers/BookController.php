<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function book(Request $request)
    {
     if ($request->isMethod('post') && $request->has('name')) {
        $book = new Book;
        $book->name = $request->input('name');
        $book->comment = $request->input('comment');
        $book->save();
    }
    $users = Book::all();

    return view('bookcom', [
        'users' => $users,
        'var1'  => $request->input('name'),
        'var2'  => $request->input('comment'),
    ]);
}
    public function moderator()
    {
        $users = Book::all();
        return view('book', [
            'users' => $users,
        ]);
    }
    
}
