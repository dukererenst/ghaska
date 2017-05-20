<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\GalleryGroup;
use  \App\Galleries;
use \Illuminate\Support\Facades\Storage;

class GalleryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.view_galleries')->with('galleryList', $this->loadGallery());
    }
    
    public function loadGallery() {
       $galleries = Galleries::paginate(15);
       foreach ($galleries as $gallery) {
           if($gallery->gallery_group != null)
           {
               $gallery->groupName = GalleryGroup::find($gallery->gallery_group)->group_name;
           }
       }
       return $galleries;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
       return view('admin.add_gallery')->with('galleryGroup', GalleryGroup::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->hasFile('feature_image')) {
          
            foreach ($request->file('feature_image') as $file) {
                Storage::disk('gallery_uploads')->put($request->group . '/' . $file->getClientOriginalName(), file_get_contents($file));
                $gallery = new Galleries();
                $gallery->gallery_group = $request->group;
                $gallery->picture_name = $file->getClientOriginalName();
                $gallery->save();
            }
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
