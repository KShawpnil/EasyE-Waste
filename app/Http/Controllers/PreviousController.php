<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PreviousController extends Controller
{
    public function index(){
        $result=DB::table('orders')->where('user_id',Auth::user()->id)->where('status','done')->get();
        $name=Auth::user()->name;
        return view('previousorder')->with(compact('result','name'));
    }
}
