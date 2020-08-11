<?php


namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;


class stripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

//        Session::flash('success', 'Payment successful!');

        return back();
    }
}
