<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BlogCategory;

class BlogCategoryController extends Controller {

    function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $blog_category = BlogCategory::all();
        return view('blogs.blog_category')->with('blog_category', $blog_category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('blogs.blog_category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $blogCategory = new BlogCategory();
        $blogCategory->category_name = $request->category_name;
        $blogCategory->save();
        return view('blogs.blog_category')->with('blog_category', $blog_category);
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
        $blog_category = BlogCategory::findOrFail($id);
        return view('blogs.blog_category_edit')->with('blog_category', $blog_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $blog_category = BlogCategory::findOrFail($id);
        $blog_category->category_name = $request->category_name;
        $blog_category->update();
       return view('blogs.blog_category')->with('blog_category', BlogCategory::all());
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
