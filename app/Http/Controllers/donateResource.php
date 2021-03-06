<?php

namespace App\Http\Controllers;

use App\donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class donateResource extends Controller
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
                    'radio' => 'required',
                    'phone' => 'required',
                    'money' => 'required',
                ],
                [
                    'radio.required' => 'Choose the form of payment',
                    'phone.required' => 'Please enter the phone number',
                    'money.required' => 'Please enter the amount',
                ]);
            $donate = new donate();
            $donate->hinh_thuc = $request->radio;
            $donate->other = $request->other;
            $donate->Card_number = $request->card;
            $donate->name = $request->name;
            $donate->doi_tuong = $request->doituong;
            $donate->email = $request->email;
            $donate->phone = $request->phone;
            $donate->so_tien_donate = $request->money;
            $donate->save();
            return redirect()->back()->with('thanhcong', 'Thanks for your support');
    }
}
