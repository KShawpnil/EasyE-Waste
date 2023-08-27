<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{
    public function index(){
        $result=DB::table('orders')->where('user_id',Auth::user()->id)->whereNot('status','done')->get();
        $name=Auth::user()->name;
        return view('trackorder')->with(compact('result','name'));
    }
}
