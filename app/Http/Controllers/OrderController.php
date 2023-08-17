<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller{
    private $id;
    public function index(){
        return view('order');
    }

    public function qfd(){
        return view('qfd');
    }

    public function orderinsert(Request $request){
        $order=new Orders;
        $order->productname=$request->productname;
        $order->producttype=$request->producttype;
        $order->productamount=$request->productamount;
        $order->endproduct=$request->endproduct;
        $order->user_id=Auth::user()->id;
        $order->save();
        $id=$order->id;
        return redirect('qfd');
    }   

    public function insertqfd(Request $request){
        Orders::where('user_id',Auth::user()->id)->where('id',$id)->update([
            'qfd'=>$request->qfd,
        ]);
        return redirect('home');
    }
}
