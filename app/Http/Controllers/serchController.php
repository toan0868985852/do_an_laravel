<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class serchController extends Controller
{
    public function getserch(Request $req){
        $serch = User::where('name','like','%'.$req->key.'%')
            ->orWhere('id',$req->key)
            ->get();
        return view('serch.serch',compact('serch'));
    }
}
