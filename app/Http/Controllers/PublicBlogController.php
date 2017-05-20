<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blogs;

class PublicBlogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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
        $blog = Blogs::find($id);
        if ($blog->blog_category_id != null) {
            $blog->catgeoryName = \App\BlogCategory::find($blog->blog_category_id)->category_name;
        }
        if ($blog->feature_image != null) {
            $blog->hasImage = 'YES';
        }
        return view('frontend.blog_detail')
                ->with('blog', $blog)
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
        $blog = Blogs::find($id);
        if ($blog->blog_category_id != null) {
            $blog->catgeoryName = \App\BlogCategory::find($blog->blog_category_id)->category_name;
        }
        if ($blog->feature_image != null) {
            $blog->hasImage = 'YES';
        }
        return view('frontend.blog_detail')
                ->with('blog', $blog)
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
