<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\QFD;
use App\Models\QFDResult;


class QFDResultsController extends Controller
{
    public function index(){
        return view('qfdresults');
    }
    public function __construct(){
        $this->obj=QFD::latest()->first();
    }
    public function fetch(){
        $item=DB::table('q_f_d_s')->where('user_id',Auth::user()->id)->where('id',$this->obj->id)->get();   
        $sum1=($this->obj->crrank1*$this->obj->wastemanage1)+($this->obj->crrank2*$this->obj->wastemanage2)+
        ($this->obj->crrank3*$this->obj->wastemanage3)+($this->obj->crrank4*$this->obj->wastemanage4)+
        ($this->obj->crrank5*$this->obj->wastemanage5);
        $sum2=($this->obj->crrank1*$this->obj->wastemini1)+($this->obj->crrank2*$this->obj->wastemini2)+
        ($this->obj->crrank3*$this->obj->wastemini3)+($this->obj->crrank4*$this->obj->wastemini4)+ 
        ($this->obj->crrank5*$this->obj->wastemini5); 
        $sum3=($this->obj->crrank1*$this->obj->wastecollect1)+($this->obj->crrank2*$this->obj->wastecollect2)+ 
        ($this->obj->crrank3 * $this->obj->wastecollect3)+($this->obj->crrank4*$this->obj->wastecollect4)+ 
        ($this->obj->crrank5 * $this->obj->wastecollect5);
        $sum4=($this->obj->crrank1 * $this->obj->produra1) + ($this->obj->crrank2 * $this->obj->produra2) +  
        ($this->obj->crrank3 * $this->obj->produra3) + ($this->obj->crrank4 * $this->obj->produra4) + 
        ($this->obj->crrank5 * $this->obj->produra5);
        $data=[$sum1,$sum2,$sum3,$sum4];

        $perform1 = ($sum1 + $sum2 + $sum3 + $sum4)/$sum1;
        $percentage1 = $perform1/100;
        $perform2 = ($sum1 + $sum2 + $sum3 + $sum4)/$sum2;
        $percentage2 = $perform2/100;
        $perform3 = ($sum1 + $sum2 + $sum3 + $sum4)/$sum3;
        $percentage3 = $perform3/100;
        $perform4 = ($sum1 + $sum2 + $sum3 + $sum4)/$sum4;
        $percentage4 = $perform4/100;
        $performance=[$percentage1,$percentage2,$percentage3,$percentage4];

        return view('qfdresults')->with(compact('item','data','performance'));
    }
    public function insert(Request $request){
        $result=new QFDResult;
        $result->user_id=Auth::user()->id;
        $result->total_importance1=$request->total_importance1;
        $result->total_importance2=$request->total_importance2;
        $result->total_importance3=$request->total_importance3;
        $result->total_importance4=$request->total_importance4;
        $result->performance1=$request->performance1;
        $result->performance2=$request->performance2;
        $result->performance3=$request->performance3;
        $result->performance4=$request->performance4;
        $result->save();
        return redirect('checkout');
    }
}
