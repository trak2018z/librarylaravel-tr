<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;
use Storage;
use Response;

class BooksController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Books::orderBy('id', 'DESC')->paginate(10);
        return $books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\BooksRequest $request) {
        $ext = $request->file('books')->getClientOriginalExtension();
        $request->file('books')->storeAs('books', $request->title . '.' . $ext);
        Books::create($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function show($fileid) {
        try {
            $file = storage_path('app') . '\books\\' . $fileid;
            return response()->download($file);
        } catch (\Exception $e) {
            return;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book) {
        return view('admin.books.edit', compact('book'));
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
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book) {

        $book->delete();
        return redirect()->route('admin.index');
    }

    /**
     * Download the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function download() {
        $this->middleware('auth');
        $books = Books::orderBy('id', 'DESC')->paginate(10);
        return view('admin.index', compact('books'));
    }

}
