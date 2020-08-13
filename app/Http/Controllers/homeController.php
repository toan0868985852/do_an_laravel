<?php

namespace App\Http\Controllers;
use App\projects;
use App\blog;
use App\Event;
use App\massage;
use App\causes;
use App\eventDetails;
use App\causeDetails;
use App\homeTitle;
use App\homebox;
use App\homeplan;
use App\partherlist;
use App\information;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function home(){
        $homeTitle = homeTitle::all();
        $homeBox = homebox::all();
        $homePlan = homeplan::all();
        $homeSlide = projects::all()->take(6);
        $homeEvent = Event::all()->take(4);
        $homeBlogGrid = blog::all()->take('3');
        $partnerList = partherlist::all();
        return view('home.home',compact('homeTitle','homeBox','homePlan', 'homeSlide','homeEvent', 'homeBlogGrid', 'partnerList'));
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
        $homePlan = homeplan::all();
        return view('home.about',compact('homePlan'));
    }

    public function even(){
        $event = Event::paginate(6);
       return view('home.Even_grid',compact('event'));
    }

    public function contact(){
       return view('home.Contact');
    }

    public function project(){
        $projects = projects::all()->take(6);
        return view('home.project', compact('projects'));
    }

    public function donate2($id){
        if (Auth::check()){
            $donate2 = causeDetails::all()->where('id',$id);
            return view('home.donate',compact('donate2'));
        }else{
            return redirect()->route('login.index');
        }
    }

}
