<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\GalleryGroup;
use  \Illuminate\Support\Facades\Storage;

class GalleryGroupController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.gallery_group')->with('galleryGroupList', GalleryGroup::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.add_gallery_group');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $galleyGroup = new GalleryGroup();
        $galleyGroup->group_name = $request->category_name;
        if ($request->hasFile('feature_image')) {
            Storage::disk('gallery_group_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
        }
         $galleyGroup->picture_name = $request->file('feature_image')->getClientOriginalName();
        $galleyGroup->save();
        return view('admin.gallery_group')->with('galleryGroupList', GalleryGroup::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $galleyGroup = GalleryGroup::find($id);
        if ($galleyGroup == null) {
            $galleyGroup = new GalleryGroup();
        }
        return view('admin.add_gallery_group')->with('galleyGroup', $galleyGroup);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $galleyGroup = GalleryGroup::find($id);

        return view('admin.edit_gallery_group')->with('galleyGroup', $galleyGroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $galleyGroup = GalleryGroup::find($id);
        $galleyGroup->group_name = $request->category_name;
        if ($request->hasFile('feature_image')) {
            Storage::disk('gallery_group_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
        }
        $galleyGroup->picture_name = $request->file('feature_image')->getClientOriginalName();
        $galleyGroup->update();
        return view('admin.gallery_group')->with('galleryGroupList', GalleryGroup::all());
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
