<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BlogCategory;
use \App\Blogs;
use  \Illuminate\Support\Facades\Storage;

class BlogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('blogs.blog_list')->with('blogs', Blogs::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('blogs.add_blog')->with('blog_category', BlogCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $blog = new Blogs();
        $blog->blog_title = $request->blog_title;
        $blog->blog_content = html_entity_encode($request->blog_content);
        $blog->blog_category_id = $request->blog_category;
        $blog->has_picture = 'NO';
        if ($request->hasFile('feature_image')) {
            Storage::disk('blog_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
            $blog->has_picture = 'YES';
        }

        $blog->save();
        return view('blogs.blog_list')->with('blogs', Blogs::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $blog = Blogs::findOrFail($id);
        return view('blogs.blog_detail')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
         $blog = Blogs::findOrFail($id);
        return view('blogs.edit_blog')->with('blog', $blog)
                ->with('blog_category', BlogCategory::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
       $blog = Blogs::findOrFail($id);
        $blog->blog_title = $request->blog_title;
       
        $blog->blog_content = htmlentities($request->blog_content,ENT_COMPAT);
        
        $blog->blog_category_id = $request->blog_category;
        $blog->feature_image = trim($request->selectedFiles);
        
        if ($request->hasFile('feature_image')) {
            
            Storage::disk('blog_uploads')->put($request->file('feature_image')->getClientOriginalName(), file_get_contents($request->file('feature_image')));
//            foreach ($request->file('feature_image') as $file) {
//                Storage::disk('blog_uploads')->put($file->getClientOriginalName(), file_get_contents($file));
////                $fileName = $fileName + $file->getClientOriginalName();
////                $fileName+=',';
//            }
            $blog->has_picture = 'YES';
        }

        $blog->update();
        return view('blogs.blog_list')->with('blogs', Blogs::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
        return view('blogs.blog_list')->with('blogs', Blogs::all());
    }

}
