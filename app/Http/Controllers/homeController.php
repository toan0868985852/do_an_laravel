<?php

namespace App\Http\Controllers;
use App\projects;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('home.home');
    }

    public function blog_content(){
        return view('home.Blog_Details');
    }

    public function blog_grid(){
        $bloggrid = projects::all()->where('trang_thai',1);
        return view('home.Blog_Grid', compact('bloggrid'));

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
       return view('home.even');
    }

    public function project(){
        $projects = projects::all()->take(6);
        return view('home.project', compact('projects'));
    }

}
