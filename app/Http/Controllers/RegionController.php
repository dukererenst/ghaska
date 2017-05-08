<?php

namespace App\Http\Controllers;

use \App\Regions;
use Illuminate\Http\Request;

class RegionController extends Controller {

     function __construct() {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.regions')->with('regions', Regions::all());
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
        $region = new Regions();
        $region->region_name = $request->region_name;
        $region->region_code = $request->region_code;
        $region->contact_person = $request->contact_person;
        $region->location = $request->location;
        $region->contact_person_telephone = $request->contact_person_telephone;
        if ($region->save()) {
            
        }
        return view('admin.regions')->with('regions', Regions::all());
  
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
        $region = Regions::findOrFail($id);

        return view('admin.regions_edit')->with('region', $region);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
       
        $region = Regions::find($id);
        if ($region != null) {
            $region->region_name = $request->region_name;
            $region->region_code = $request->region_code;
            $region->contact_person = $request->contact_person;
            $region->location = $request->location;
            $region->contact_person_telephone = $request->contact_person_telephone;
            $region->update();
        }
        return view('admin.regions')->with('regions', Regions::all());
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
