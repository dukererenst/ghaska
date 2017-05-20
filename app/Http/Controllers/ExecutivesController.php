<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Executives;
use  \Illuminate\Support\Facades\Storage;

class ExecutivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_executives')->with('execustives', $this->allExecutives()); 
    }
    
    public function allExecutives() {
        $executives = Executives::all();
        return $executives;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.create_executive')->with('positions', \App\Positions::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $executive = new Executives();
        $executive->full_name = $request->full_name;
        $executive->position = $request->position;
        $executive->telephone = $request->telephone;
        $executive->email_address = $request->email_address;
        $executive->program = $request->program;
        $executive->institution = $request->institution;
        $executive->picture = $request->imageNames;
        
        if ($request->hasFile('feature_image')) {
            Storage::disk('executive_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
           
        }
        $executive->save();
        return view('admin.admin_executives')->with('execustives', $this->allExecutives()); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $executive = Executives::find($id);
       return view('admin.edit_executive')
               ->with('executive', $executive)
               ->with('positions', \App\Positions::all()); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $executive = Executives::find($id);
       return view('admin.edit_executive')
               ->with('executive', $executive)
               ->with('positions', \App\Positions::all()); 
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
         $executive = Executives::find($id);
        $executive->full_name = $request->full_name;
        $executive->position = $request->position;
        $executive->telephone = $request->telephone;
        $executive->email_address = $request->email_address;
        $executive->program = $request->program;
        $executive->institution = $request->institution;
        $executive->picture = $request->imageNames;
        
        if ($request->hasFile('feature_image')) {
            Storage::disk('executive_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
           
        }
        $executive->update();
        return view('admin.admin_executives')->with('execustives', $this->allExecutives()); 
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
