<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;

class RolesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Roles::orderBy('id', 'DESC')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $data
     * @return \Illuminate\Http\Response
     */
    public function store($data) {
        echo'<pre>';
        var_dump($data);
        die('ddd');
//        $user = \App\RolesHasUsers::create($data);
//        $data = ['user' => $user, 'role_id' => $request->input('role_id')];
//        return redirect()->route('roles.store', $data);
    }

}
