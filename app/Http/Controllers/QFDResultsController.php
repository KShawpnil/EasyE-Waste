<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QFDResultsController extends Controller
{
    public function index(){
        return view('qfdresults');
    }
    public function fetch(){
        $item=DB::table('q_f_d_s')->where('user_id',Auth::user()->id)->get();
        return view('qfdresults')->with('item',$item);
    }
}
