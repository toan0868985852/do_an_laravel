<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailController extends Controller
{
    public function getmail(){
        return view('dashboard.email.compose-mail');
    }
}