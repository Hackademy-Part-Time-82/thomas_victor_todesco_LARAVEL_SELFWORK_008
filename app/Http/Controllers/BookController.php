<?php

namespace App\Http\Controllers;

use App\Mail\BookMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BookController extends Controller
{

    public function books() {
        $books= Book::all();
        return view ('books', [
            'books'=>$books
        ]);
    }

    public function register_your_book() {
     return view ('register_book_form');
    }

    public function store_book (Request $request) {
        
        $request->validate(['name'=>['required']]);

        $book=Book::create([
            'name'=>$request->input('name'),
            'year'=>$request->input('year'),
            'pages'=>$request->input('pages')
            ]);
            Mail::to('tommytod93@gmail.com')->send(new BookMail($book));
            return redirect()->route('register_your_book')->with('success', "Libro inserito correttamente in archivio");
            }
}
