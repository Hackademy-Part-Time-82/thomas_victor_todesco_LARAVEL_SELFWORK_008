<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/books', [BookController::class, 'index'])->name('index');
//questa rotta rimanda alla pagina dell'elenco dei libri
//rotta INDEX

Route::get('/register-your-book', [BookController::class, 'create'])->name('create');
//questa rotta rimanda alla pagina con il form per la registrazione dei libri
//rotta CREATE

Route::post('/store-book', [BookController::class, 'store'])->name('store');
//rotta post per regisrare libro su DB
//rotta POST
