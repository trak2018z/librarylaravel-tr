<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'Moderator']
], function() {
    Route::get('books', [
        'uses' => 'BooksController@index',
        'as' => 'books.index'
    ]);
    Route::get('books/create', [
        'uses' => 'BooksController@create',
        'as' => 'books.create'
    ]);
    Route::post('books/store', [
        'uses' => 'BooksController@store',
        'as' => 'books.store'
    ]);
    
    Route::get('books/edit/{book}', [
        'uses' => 'BooksController@edit',
        'as' => 'books.edit'
    ]);
    
    Route::put('books/{book}', [
        'uses' => 'BooksController@update',
        'as' => 'books.update'
    ]);
    
    Route::delete('books/{book}', [
        'uses' => 'BooksController@destroy',
        'as' => 'books.delete'
    ]);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
