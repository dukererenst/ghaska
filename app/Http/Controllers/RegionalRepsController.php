<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\RegionalRepresentative;
use  \Illuminate\Support\Facades\Storage;

class RegionalRepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.regional_rep')->with('reps', $this->allRegionalRep());
    }
    
    public function allRegionalRep() {
        $regionalRep = RegionalRepresentative::all();
        foreach ($regionalRep as $rep) {
            if($rep->region != null)
            {
                $rep->regionName = \App\Regions::find($rep->region)->region_name;
            }
        }
        return $regionalRep;  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_regional_rep')->with('regions', \App\Regions::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $executive = new RegionalRepresentative();
         $executive->full_name = $request->full_name;
        $executive->region = $request->region;
        $executive->telephone = $request->telephone;
        $executive->email_address = $request->email_address;
        $executive->program = $request->program;
        $executive->picture = $request->imageNames;
        
        if ($request->hasFile('feature_image')) {
            Storage::disk('regional_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
           
        }
        $executive->save();
        return view('admin.regional_rep')->with('reps', $this->allRegionalRep());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $rep = RegionalRepresentative::find($id);
        return view('admin.create_regional_rep')
                ->with('regions', \App\Regions::all())
                ->with('rep',$rep);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rep = RegionalRepresentative::find($id);
        return view('admin.edit_regional_rep')
                ->with('regions', \App\Regions::all())
                ->with('rep',$rep);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $executive = RegionalRepresentative::find($id);
         $executive->full_name = $request->full_name;
        $executive->region = $request->region;
        $executive->telephone = $request->telephone;
        $executive->email_address = $request->email_address;
        $executive->program = $request->program;
        $executive->picture = $request->imageNames;
        
        if ($request->hasFile('feature_image')) {
            Storage::disk('regional_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
           
        }
        $executive->update();
        return view('admin.regional_rep')->with('reps', $this->allRegionalRep());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
