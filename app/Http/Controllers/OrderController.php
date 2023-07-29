<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller{
    public function index(){
        return view('order');
    }

    public function orderinsert(Request $request){
        $order=new Orders;
        $order->productname=$request->productname;
        $order->producttype=$request->producttype;
        $order->productamount=$request->productamount;
        $order->endproduct=$request->endproduct;
        $order->save();
    }   
}
