<?php

namespace App\Http\Controllers;
use App\User;
use Reminder;
use Sentinel;
use App\reminders;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class forgotPasswordControllers extends Controller
{
    public function forgotPassword()
    {
        return view('forgotPassword.forgot');
    }

    public function Password(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if ($user == null)
        {
            return redirect()->back()->with(['error' => 'Email not exists']);
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Reset code sent to your email']);
    }

    public function sendEmail($user, $code)
    {
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => $code],
            function ($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, reset your password.");
            }
        );
    }

    public function reset($email, $code)
    {
        $user = User::whereEmail($email)->first();
        $reminders = reminders::all()->where('user_id', $user->id)->first();

        if ($user == null)
        {
            echo 'Email not exists';
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user);

        if ($reminder){
            if ($code == $reminders->code){
                return view('forgotPassword.resetPassword')->with(['user'=>$user, 'code'=>$code]);
            }else{
                return redirect('/signup');
            }
        }else{
            echo 'time expired';
        }
    }

    public function resetPassword(Request $request, $email, $code)
    {
        $this->validate($request,[
            'password' => 'required|min:6|max:12|confirmed',
         ]);

        $user = User::whereEmail($email)->first();
        $reminders = reminders::all()->where('user_id', $user->id)->first();

        if ($user == null)
        {
            echo 'Email not exists';
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user);

        if ($reminder){
            if ($code == $reminders->code){
                Reminder::complete($user, $code, $request->password);
                return redirect('/login')->with('success', 'Password reset. Please login with new password');
            }else{
                return redirect('/signup');
            }
        }else{
            echo 'time expired';
        }
    }
}
