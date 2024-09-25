<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class EditBookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('editbook', compact('book'));
    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);


        $book->title = $request->title;
        $book->author = $request->author;
        $book->category_id = $request->category_id;
        $book->published_year = $request->published_year;

        $book->save();

        return redirect('/editbook')->with('success', 'Edit Book Success');
    }

    public function destroy(Book $book)
    {

        $book->delete();

        return redirect('/editbook')->with('success', 'Deleted Book Success');
    }
}
