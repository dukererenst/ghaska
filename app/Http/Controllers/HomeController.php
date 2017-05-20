<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blogs;
use \App\AboutUs;
use \App\Executives;
use \App\RegionalRepresentative;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $aboutUs = AboutUs::find(1);
        if($aboutUs == null)
        {
            $aboutUs = new AboutUs();
        }
        return view('home')->with('blogs', $this->loadBlogs())
                ->with('home_active', 'active')
                  ->with('contact_active', '')
                ->with('member_active', '')
                ->with('media_active', '')
                ->with('about_active', '')
                 ->with('aboutUs', $aboutUs);
    }
    public function aboutUs()
    {
        $aboutUs = AboutUs::find(1);
        if($aboutUs == null)
        {
            $aboutUs = new AboutUs();
        }
        return view('frontend.about_us')
                ->with('about_active', 'active')
                ->with('member_active', '')
                 ->with('contact_active', '')
                ->with('media_active', '')
                 ->with('home_active', '')
                ->with('aboutUs', $aboutUs);
    }
    public function contactUs()
    {
        return view('frontend.contact_us')
                ->with('about_active', '')
                 ->with('member_active', '')
                ->with('media_active', '')
                ->with('contact_active', 'active')
                 ->with('home_active', '');
    }
    public function execustives()
    {
        return view('frontend.excutives')
                ->with('about_active', '')
                ->with('member_active', 'active')
                ->with('contact_active', '')
                 ->with('home_active', '')
                ->with('media_active', '')
                ->with('executives', Executives::all())
                ->with('regionalReps', $this->allRegionalRep()); 
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
    public function blogs()
    {
        return view('frontend.blogs')
                ->with('blogs', $this->loadBlogs())
                 ->with('about_active', '')
                ->with('media_active', 'active')
                ->with('member_active', '')
                ->with('contact_active', '')
                 ->with('home_active', '');
    }
    
    public function loadBlogs() {
        $blogs = Blogs::all();
        foreach ($blogs as $blog) {
           if($blog->blog_category_id != null)
           {
               $blog->catgeoryName = \App\BlogCategory::find($blog->blog_category_id)->category_name;
           }
           if($blog->feature_image != null)
           {
               $blog->hasImage = 'YES';
           }
        }
        return $blogs; 
    }
}
