<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blogs;

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
        return view('home')->with('blogs', $this->loadBlogs())
                ->with('home_active', 'active')
                  ->with('contact_active', '')
                ->with('member_active', '')
                ->with('about_active', '');
    }
    public function aboutUs()
    {
        return view('frontend.about_us')
                ->with('about_active', 'active')
                ->with('member_active', '')
                 ->with('contact_active', '')
                 ->with('home_active', '');
    }
    public function contactUs()
    {
        return view('frontend.contact_us')
                ->with('about_active', '')
                 ->with('member_active', '')
                ->with('contact_active', 'active')
                 ->with('home_active', '');
    }
    public function execustives()
    {
        return view('frontend.excutives')
                ->with('about_active', '')
                ->with('member_active', 'active')
                ->with('contact_active', '')
                 ->with('home_active', '');
    }
    public function blogs()
    {
        return view('frontend.blogs')->with('blogs', $this->loadBlogs());
    }
    
    public function loadBlogs() {
        return Blogs::all(); 
    }
}
