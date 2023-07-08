<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function index () {
        return view('create');
    }
    public function create (Request $request) {
        // echo "<pre>";
        // print_r($request->all());
        $form = new Form();
        $form->product_name = $request['product_name'];
        $form->product_type = $request['product_type'];
        $form->product_quantity = $request['product_quantity'];
        $form->endproduct = $request['endproduct'];
        $form->save();
    }
}
