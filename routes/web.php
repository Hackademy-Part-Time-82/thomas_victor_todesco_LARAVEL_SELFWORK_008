<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/books', [BookController::class, 'index'])->name('index');
//questa rotta rimanda alla pagina dell'elenco dei libri
//rotta INDEX

Route::get('/register-your-book', [BookController::class, 'register_your_book'])->name('register_your_book');
//questa rotta rimanda alla pagina con il form per la registrazione dei libri

Route::post('/store-book', [BookController::class, 'store_book'])->name('store_book');
//rotta post per regisrare libro su DB
