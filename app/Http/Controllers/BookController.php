<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function book(Request $request)
    {
        $name = $request->input('name');
        $comment = $request->input('comment');
    
    $book = Book::all();

    $book = new Book;
    $book->comment = $comment;
    $book->name = $name;
    $book->save();
    return view('book', [
        'var1' => $name,
        'var2' => $comment,
        
    ]);
    }
}
