<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DangkyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.all_register',compact('users'));
    }

}
