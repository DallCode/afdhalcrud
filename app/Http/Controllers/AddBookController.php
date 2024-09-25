<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function index()
    {
       return view('addbook');
    }

    public function store(Request $request)
    {

        Book::create([

            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'category_id' => $request->input('category_id'),
            'published_year' => $request->input('published_year'),
        ]);

        return redirect('/addbook')->with('success', 'Added Book Success');
    }

}
