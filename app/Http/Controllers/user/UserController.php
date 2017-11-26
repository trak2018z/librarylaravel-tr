<?php

namespace App\Http\Controllers\user;

use App\Books;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BooksController;

class UserController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = (new BooksController)->index();
        return view('user.books.index', compact('books'));
    }
}
