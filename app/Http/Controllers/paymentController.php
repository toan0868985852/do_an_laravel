<?php


namespace App\Http\Controllers;
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

            Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,

            ]);

            return $this->posts($request);


        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public  function posts(Request $request)
    {
                $donate = new donate();
                $donate->hinh_thuc = 'Card';
//                $donate->other = $request->other;
//                $donate->Card_number = $request->card;
//                $donate->name = $request->name;
//                $donate->doi_tuong = $request->doituong;
                $donate->history = 1;
                $donate->email = $request->email;
                $donate->so_tien_donate = $request->money;
//                $donate->save();
//                return redirect()->back()->with('thanhcong', 'Thanks for your support');
        dd($donate);
    }

    public function order(Request $request){
        $donate = new donate();
        $donate->hinh_thuc =  $request->hinh_thuc;
//                $donate->other = $request->other;
//                $donate->Card_number = $request->card;
//                $donate->name = $request->name;
//                $donate->doi_tuong = $request->doituong;
        $donate->history = 0;
        $donate->email = $request->email;
        $donate->so_tien_donate = $request->money;
//                $donate->save();
//                return redirect()->back()->with('thanhcong', 'Thanks for your support');
        dd($donate);
    }
}
