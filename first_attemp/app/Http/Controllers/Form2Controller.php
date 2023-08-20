<?php

namespace App\Http\Controllers;
use App\Models\Form2;
use Illuminate\Http\Request;

class Form2Controller extends Controller
{
    public function index () {
        return view('create2');
    }

    public function create2 (Request $request) {
        $form2 = new Form2();
        // $form2->user_id = $request['user_id'];
        // $form2->cr = $request['cr'];
        $form2->cr_rank = $request['cr_rank'];
        $form2->waste_management = $request['waste_management'];
        $form2->waste_minization = $request['waste_minization'];
        $form2->waste_collection = $request['waste_collection'];
        $form2->product_durability = $request['product_durability'];
        // $form2->cr_rank = $request->cr_rank;
        // $form2->waste_management = $request->waste_management;
        // $form2->waste_minization = $request->waste_minization;
        // $form2->waste_collection = $request->waste_collection;
        // $form2->product_durability = $request->product_durability;
        $form2->save();
        return redirect('create3');
    }
}
