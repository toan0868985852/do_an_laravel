<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\listimg;

class adminController extends Controller
{
    public function image(){
        $image = image::all();
        return view('dashboard.image.image',compact('image'));
    }

    public function imagelist($id){
        $imagelist = listimg::all()->where('img_id',$id);
        return view('dashboard.image.listimg',compact('imagelist'));
    }
}
