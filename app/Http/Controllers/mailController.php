<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail;

class mailController extends Controller
{
    public function getmail(){
        return view('dashboard.email.compose-mail');
    }

    public function sendemail(){
        $mail = mail::all();
        return view('dashboard.email.send',compact('mail'));
    }

    public function deletemail($id)
    {
        mail::findOrFail($id)->delete();
        return redirect()->route('sendemail');
    }

    public function viewmail($id)
    {
        $viewmail = mail::all()->where('id',$id);
        return view('dashboard.email.viewmail',compact('viewmail'));
    }
}
