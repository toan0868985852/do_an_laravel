<?php

namespace App\Http\Controllers;
use App\projects;
use App\blog;
use App\Event;
use App\massage;
use App\causes;
use App\eventDetails;
use App\causeDetails;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class homeController extends Controller
{
    public function home(){
        return view('home.home');
    }

    public function blog_details($id){
        return view('home.blog_details.blog_details_1');
    }

    public function blog($id){
        $blog = blog::all()->where('id',$id);
        $massages = massage::all();
        return view('home.blog_details.blog_details_1',compact('blog','massages'));
    }

    public function blog_grid(){
        $blogGrid = blog::all();
        return view('home.Blog_Grid',compact('blogGrid'));
    }

    public function causes_details($id){
        $causeDetails = causeDetails::all()->where('id',$id);
        return view('home.cause_details.cause_details',compact('causeDetails'));
    }

    public function event_details($id){
        $DetailsEvent = eventDetails::all()->where('id',$id);
        return view('home.event_details.event_details',compact('DetailsEvent'));
    }


    public function causes_grid(){
        $causes = causes::all();
        $projects = projects::all()->take(6);
        return view('home.Causes_Grid',compact('causes','projects'));
    }

    public function about(){
        return view('home.about');
    }

    public function even(){
        $event = Event::paginate(6);
       return view('home.Even_grid',compact('event'));
    }

    public function project(){
        $projects = projects::all()->take(6);
        return view('home.project', compact('projects'));
    }

}
