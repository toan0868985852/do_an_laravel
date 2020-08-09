<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;


class sendmailController extends Controller
{
    public function sendmail(Request $request)
    {
        $this->validate($request,
            [
                'to'=>'required',
                'subject'=>'required',
            ],
            [
                'to.required'=>'Please enter your email',
                'subject.required'=>'Please enter a title',
            ]);
        $mail = new \App\mail();
        $mail->email = $request->to;
        $mail->title = $request->subject;
        $mail->content = $request->body;
        $mail->save();

        $details = [
            'title'=>$request->subject,
            'body'=>$request->body,
        ];
        Mail::to($request->to)->send(new sendmail($details));
       return redirect()->route('mail')->with('thanhcong','Successful mailing');
    }
}
