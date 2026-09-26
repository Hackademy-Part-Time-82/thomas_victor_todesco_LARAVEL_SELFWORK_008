<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Mail\BookMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Pest\Support\View;

class BookController extends Controller
{

    public function index() {
        $books= Book::all();
        return view ('index', [
            'books'=>$books
        ]);
    }

    public function create() {
     return view ('create');
    }

    public function store (BookStoreRequest $request) {
        $path_image='/covers/generic_cover.jpg';
        if ($request->hasFile('image')) {
           $path_image=$request->file('image')->store('covers', 'public');
        }
        $book=Book::create([
            'title'=>$request->input('title'),
            'year'=>$request->input('year'),
            'pages'=>$request->input('pages'),
            'image'=>$path_image,
            'user_id'=>auth()->user()->id,
            ]);
            //Mail::to('tommytod93@gmail.com')->send(new BookMail($book));
            return redirect()->route('create')->with('success', "Libro inserito correttamente in archivio");
            }


            public function show (Book $book) {
                return view ('show', ['book'=>$book]);
            }
}
