<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Books::orderBy('id', 'DESC')->paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\BooksRequest $request) {
        Books::create($request->all());
        return redirect()->route('books.index');
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
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BooksRequest $request
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\BooksRequest $request, Books $book) {
       $book->update($request->all());
       return redirect()->route('books.index');
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
