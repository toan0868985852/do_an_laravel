<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class adminResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('dashboard.dashboard_admin',compact('user'));
    }

}
