<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('home.home');
    }

    public function blog_details(){
        return view('home.Blog_Details');
    }

    public function blog_grid(){
        return view('home.Blog_Grid');
    }

    public function causes_details(){
        return view('home.Causes_Details');
    }

    public function causes_grid(){
        return view('home.Causes_Grid');
    }

    public function about(){
        return view('home.about');
    }

    public function even(){
        return view('home.Even_grid');
    }

    public function project(){
        return view('home.project');
    }

}
