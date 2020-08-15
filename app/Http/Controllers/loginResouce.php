<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
session_start();

class loginResouce extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=$_SERVER['HTTP_REFERER'];
        session()->put('url-back', $url);
        return view('login-signup.login');
    }

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
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'
            ]);
        $credentials = array('email'=>$request->email, 'password'=>$request->password);
        if (Auth::attempt($credentials)){
            return redirect('admin')->with('thongbao','Đăng nhập thành công');
        }
        else{
            return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không chính xác');
        }
    }
}
