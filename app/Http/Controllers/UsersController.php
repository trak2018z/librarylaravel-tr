<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Add a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function add() {
        $roles = Roles::pluck('name', 'id');
        return view('admin.users.add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\UsersRequest $request) {
//        $user = User::create($request->all());
        $data = ['user_id' => 2, 'role_id' => $request->input('role_id')];
//        return redirect()->route('roles.store')->with('status', 'Profile updated!');;
        return (new \App\RolesHasUsers())->store($data);
        return Redirect::route('roles.store, $id')->with( ['data' => $data] );
        return redirect()->guest(redirect('roles.store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UsersRequest $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UsersRequest $request, User $user) {
        $user->update($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {

        $user->delete();
        return redirect()->route('admin.index');
    }

}
