<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\AboutUs;

class AboutUsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $aboutUs = AboutUs::find(1);
        if ($aboutUs != null) {
            return view('admin.admin_about_us')->with('aboutUs', $aboutUs);
        } else {
            return view('admin.admin_about_us')->with('aboutUs', new AboutUs());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $aboutUs = AboutUs::find(1);
        if ($aboutUs != null) {
            return view('admin.admin_about_us')->with('aboutUs', $aboutUs);
        } else {
            return view('admin.admin_about_us')->with('aboutUs', new AboutUs());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $aboutUs = new AboutUs();
        $aboutUs->id = 1;
        $aboutUs->about_us = $request->about_us;
        $aboutUs->who_we_are = $request->who_we_are;

        $about_Us = AboutUs::find(1);

        if ($about_Us != null) {
            $about_Us->about_us = $request->about_us;
            $about_Us->who_we_are = $request->who_we_are;

            $about_Us->update();
            return view('admin.admin_about_us')->with('aboutUs', $about_Us);
        } else {
            $aboutUs->save();
            return view('admin.admin_about_us')->with('aboutUs', $aboutUs);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
