<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Books::paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book) {
        //
    }

}