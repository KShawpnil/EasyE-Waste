<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\QFD;


class QFDController extends Controller
{
    public function index(){
        return view('qfd');
    }

    public function insertqfd(Request $request){
        $qfd=new QFD;
        $qfd->user_id=Auth::user()->id;
        $qfd->crrank1 = $request->crrank1;
        $qfd->wastemanage1 = $request->wastemanage1;
        $qfd->wastemini1 = $request->wastemini1;
        $qfd->wastecollect1 = $request->wastecollect1;
        $qfd->produra1 = $request->produra1; 
        
        $qfd->crrank2 = $request->crrank2;
        $qfd->wastemanage2 = $request->wastemanage2;
        $qfd->wastemini2 = $request->wastemini2;
        $qfd->wastecollect2 = $request->wastecollect2;
        $qfd->produra2 = $request->produra2; 

        $qfd->crrank3 = $request->crrank3;
        $qfd->wastemanage3 = $request->wastemanage3;
        $qfd->wastemini3 = $request->wastemini3;
        $qfd->wastecollect3 = $request->wastecollect3;
        $qfd->produra3 = $request->produra3; 

        $qfd->crrank4 = $request->crrank4;
        $qfd->wastemanage4 = $request->wastemanage4;
        $qfd->wastemini4 = $request->wastemini4;
        $qfd->wastecollect4 = $request->wastecollect4;
        $qfd->produra4 = $request->produra4; 

        $qfd->crrank5 = $request->crrank5;
        $qfd->wastemanage5 = $request->wastemanage5;
        $qfd->wastemini5 = $request->wastemini5;
        $qfd->wastecollect5 = $request->wastecollect5;
        $qfd->produra5 = $request->produra5; 

        $qfd->save();
        return redirect('qfdresults');
    }
}
