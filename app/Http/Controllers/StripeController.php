<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;


class StripeController extends Controller{
    public function index(){
        return view('checkout');
    }
    public function details(){
        $item=DB::table('orders')->where('user_id',Auth::user()->id)->where('status','pending')->get();
        return view('checkout')->with('item',$item);
    }
    public function session(Request $request){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $productname=$request->get('producttype');
        $productamount=$request->get('productamount');
        $totalprice=$request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'BDT',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => $productamount,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
        return redirect()->away($session->url);
    }
    public function success(){
        Orders::where('user_id',Auth::user()->id)->update([
            'status'=>'paid',
        ]);
        return redirect('home');
    }
}
