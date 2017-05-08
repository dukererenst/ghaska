<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class PendingUserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $members = User::where('authorized', '=', 0)->get();

        return view('admin.pending_members')->with('members', $members);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user = User::findOrFail($id);
        $user->authorized = 1;
        $user->update();
        $members = User::where('authorized', '=', 0)->get();
        return view('admin.pending_members')->with('members', $members);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->authorized = 1;
        $user->update();
        $members = User::where('authorized', '=', 0)->get();
        return view('admin.pending_members')->with('members', $members);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = User::findOrFail($id);
       
        $user->remove();
        $members = User::where('authorized', '=', 0)->get();
        return view('admin.pending_members')->with('members', $members);
    }

}
