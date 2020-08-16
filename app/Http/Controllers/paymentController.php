<?php


namespace App\Http\Controllers;

use App\causeDetails;
use App\donate;
use App\User;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function card(Request $request)
    {
        try {
            Stripe::setApiKey(env('SECRET_KEY'));

            Charge::create([
                "amount" => $request->money * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,

            ]);

            return $this->posts($request);


        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function posts(Request $request)
    {
        $this->validate($request,
            [
                'money' => 'required',
                'phone' => 'required',
            ],
            [
                'money.required' => '',
                'phone.required' => '',
            ]);
        $donate = new donate();
        $donate->hinh_thuc = 'Card';
        $donate->name = $request->name;
        $donate->doi_tuong = $request->doituong;
        $donate->history = 1;
        $donate->email = $request->email;
        $donate->so_tien_donate = $request->money;
        $donate->phone = $request->phone;
        $donate->account_id = $request->account_id;
        $donate->projects_id = $request->projects_id;
        $donate->save();
        $amount = causeDetails::all()->where('id', $donate->projects_id);
        foreach ($amount as $value) {
            $value->so_tien_khuyen_gop_duoc += $donate->so_tien_donate;
            $value->save();
        }
        return redirect()->back()->with('thanhcong', 'Thanks for your support');
    }

    public function order(Request $request)
    {
        $this->validate($request,
            [
                'money' => 'required',
                'phone' => 'required',
            ],
            [
                'money.required' => '',
                'phone.required' => '',
            ]);
        $donate = new donate();
        $donate->hinh_thuc = $request->other;
        $donate->name = $request->name;
        $donate->doi_tuong = $request->doituong;
        $donate->history = 0;
        $donate->email = $request->email;
        $donate->so_tien_donate = $request->money;
        $donate->phone = $request->phone;
        $donate->account_id = $request->account_id;
        $donate->projects_id = $request->projects_id;
        $donate->save();
        return redirect()->back()->with('thanhcong', 'Thanks for your support');
    }

    public function paypal(Request $request)
    {
        $this->validate($request,
            [
                'money' => 'required',
                'phone' => 'required',
            ],
            [
                'money.required' => '',
                'phone.required' => '',
            ]);
        $donate = new donate();
        $donate->hinh_thuc = 'Paypal';
        $donate->name = $request->name;
        $donate->doi_tuong = $request->doituong;
        $donate->history = 1;
        $donate->email = $request->email;
        $donate->so_tien_donate = $request->money;
        $donate->phone = $request->phone;
        $donate->account_id = $request->account_id;
        $donate->projects_id = $request->projects_id;
        $donate->save();
        $amount = causeDetails::all()->where('id', $donate->projects_id);
        foreach ($amount as $value){
            $value->so_tien_khuyen_gop_duoc += $donate->so_tien_donate;
            $value->save();
        }
        return redirect()->back()->with('thanhcong', 'Thanks for your support');
    }
}
