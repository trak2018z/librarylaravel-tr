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
Route::get('/', [
    'uses' => 'user\UserController@index',
    'as' => 'user.index'
]);
Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin', 'Moderator']
        ], function() {
    Route::get('/admin', [
        'uses' => 'admin\AdminController@index',
        'as' => 'admin.index'
    ]);
    Route::get('admin/books/create', [
        'uses' => 'BooksController@create',
        'as' => 'books.create'
    ]);
    Route::post('books/store', [
        'uses' => 'BooksController@store',
        'as' => 'books.store'
    ]);

    Route::get('books/edit/{book}', [
        'uses' => 'admin\BooksController@edit',
        'as' => 'books.edit'
    ]);

    Route::put('books/{book}', [
        'uses' => 'admin\BooksController@update',
        'as' => 'books.update'
    ]);

    Route::delete('books/{book}', [
        'uses' => 'BooksController@destroy',
        'as' => 'books.delete'
    ]);
});
Auth::routes();

Route::get('download/{fileid}', [
    'uses' => 'BooksController@show',
    'as' => 'books.download'
])->middleware('auth');
