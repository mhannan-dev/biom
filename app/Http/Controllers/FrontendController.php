<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home()
    {
        $data['pageName'] = "home";
        return view('frontend.home', $data);
    }

    public function courses()
    {
        $data['pageName'] = "courses";
        return view('frontend.courses', $data);
    }

    public function blog(){
        $data['pageName'] = "blog";
        return view('frontend.blog', $data);
    }
    public function contact(){
        $data['pageName'] = "contact";
        return view('frontend.contact', $data);
    }
    public function registration(){
        return view('frontend.registration');
    }
}
