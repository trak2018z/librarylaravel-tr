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
    //books
    Route::get('admin/books/create', [
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

    //users
    Route::get('users/edit/{user}', [
        'uses' => 'UsersController@edit',
        'as' => 'users.edit'
    ]);
    Route::put('users/{user}', [
        'uses' => 'UsersController@update',
        'as' => 'users.update'
    ]);
    Route::delete('users/{user}', [
        'uses' => 'UsersController@destroy',
        'as' => 'users.delete'
    ]);
    Route::get('admin/users/addUser', [
        'uses' => 'UsersController@add',
        'as' => 'users.add'
    ]);
    Route::post('users/store', [
        'uses' => 'UsersController@store',
        'as' => 'users.store'
    ]);
    Route::post('roles/store{$id}', [
        'uses' => 'RolesController@store',
        'as' => 'roles.store'
    ]);
});
Auth::routes();

Route::get('download/{fileid}', [
    'uses' => 'BooksController@show',
    'as' => 'books.download'
])->middleware('auth');
