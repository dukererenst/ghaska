<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\GalleryGroup;

class GalleriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('frontend.gallery')->with('galleryGroup', $this->loadGalleryGroup())
                        ->with('about_active', '')
                        ->with('media_active', 'active')
                        ->with('member_active', '')
                        ->with('contact_active', '')
                        ->with('home_active', '');
    }

    public function loadGalleryGroup() {
        $galleryGroupList = GalleryGroup::paginate(15);
        return $galleryGroupList;
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
        $gallery = \App\Galleries::where('gallery_group', '=', $id)->paginate(30);
        return view('frontend.gallery_detail')
                        ->with('galleryList', $gallery)
                        ->with('about_active', '')
                        ->with('media_active', 'active')
                        ->with('member_active', '')
                        ->with('contact_active', '')
                        ->with('home_active', '');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $gallery = \App\Galleries::where('gallery_group', '=', $id)->paginate(30);
        return view('frontend.gallery_detail')
                        ->with('galleryList', $gallery)
                        ->with('about_active', '')
                        ->with('media_active', 'active')
                        ->with('member_active', '')
                        ->with('contact_active', '')
                        ->with('home_active', '');
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
