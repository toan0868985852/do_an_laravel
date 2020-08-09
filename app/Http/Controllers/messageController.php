<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\massage;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request,
                [
                    'comment'=>'required',
                    'name'=>'required',
                    'email'=>'required',
                ],
                [
                    'name.required'=>'Please enter a name',
                    'email.required'=>'Please enter email',
                ]);
            $message = new massage();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->comment = $request->comment;
            $message->save();
            return redirect()->back();
    }

}
