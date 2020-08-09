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
        if(Auth::check()) {
            $this->validate($request,
                [
                    'email' => 'required',
                    'phone' => 'required',
                    'money' => 'required',
                ],
                [
                    'email.required' => 'Vui lòng nhập email',
                    'phone.required' => 'Vui lòng nhập mật khẩu',
                    'money.required' => 'Vui lòng nhập số tiền',
                ]);
            $donate = new donate();
            $donate->hinh_thuc = $request->radio;
            $donate->name = $request->name;
            $donate->email = $request->email;
            $donate->phone = $request->phone;
            $donate->so_tien_donate = $request->money;
            $donate->save();
            return redirect()->back()->with('thanhcong', 'Thanks for your support');
        }
        else{
            return redirect()->route('login.index');
        }
    }

}
