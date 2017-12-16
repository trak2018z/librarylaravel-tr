<?php

namespace App\Http\Controllers\admin;

use App\Books;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = (new BooksController)->index();
        $users = (new UsersController)->index();
        
        $data = ['books' => $books, 'users' => $users];
        return view('admin.index', compact('data'));
    }

}
