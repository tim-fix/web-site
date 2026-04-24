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
    $books = Book::all();

    return view('bookcom', [
        'books' => $books,
        'var1'  => $request->input('name'),
        'var2'  => $request->input('comment'),
    ]);
}
    public function moderator()
    {
        $books = Book::all();
        return view('book', [
            'books' => $books,
        ]);
    }
    public function moderatordel($id)
    {
        $books = Book::find($id);
        $books->delete();
    }
    public function moderatorrew(Request $request, $id)
    {
         $books = Book::find($id);
            if ($request->isMethod('post') && $request->has('name')) {
        
        $books->name = $request->input('name');
        $books->comment = $request->input('comment');
        $books->save();
    }
            return view('bookrew', [
                'books' => $books]);
    }
}
