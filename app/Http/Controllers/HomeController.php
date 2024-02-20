<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Website;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $websites = Website::where('id', '=', '1')->get();
        $feeds = Feed::all();
        return view('home', [
            'websites' => $websites,
            'feeds' => $feeds
        ]);
    }
    public function before_after() {
        $websites = Website::where('id', '=', '1')->get();
        $feeds = Feed::all();
        return view('before-after', [
            'websites' => $websites,
            'feeds' => $feeds
        ]);
    }
    public function testimonials() {
        $websites = Website::where('id', '=', '1')->get();
        $feeds = Feed::all();
        return view('testimonials', [
            'websites' => $websites,
            'feeds' => $feeds
        ]);
    }
    public function contact() {
        $websites = Website::where('id', '=', '1')->get();
        $feeds = Feed::all();
        return view('contact', [
            'websites' => $websites,
            'feeds' => $feeds
        ]);
    }




}
