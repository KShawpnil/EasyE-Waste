<?php

namespace App\Http\Controllers;
use App\Models\demoform;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index () {
        return view('demo');
    }

    public function demo (Request $request) {
        $form3 = new demoform();
        
        $form3->cdr = $request->cdr;

        $form3->checkbox2 = $request->checkbox2;
        $form3->checkbox21 = $request->checkbox21;
        $form3->checkbox22 = $request->checkbox22;
        $form3->checkbox23 = $request->checkbox23;
        $form3->checkbox24 = $request->checkbox24;

        $form3->checkbox3 = $request->checkbox3;
        $form3->checkbox31 = $request->checkbox31;
        $form3->checkbox32 = $request->checkbox32;
        $form3->checkbox33 = $request->checkbox33;
        $form3->checkbox34 = $request->checkbox34;

        $form3->checkbox4 = $request->checkbox4;
        $form3->checkbox41 = $request->checkbox41;
        $form3->checkbox42 = $request->checkbox42;
        $form3->checkbox43 = $request->checkbox43;
        $form3->checkbox44 = $request->checkbox44;

        $form3->checkbox5 = $request->checkbox5;
        $form3->checkbox51 = $request->checkbox51;
        $form3->checkbox52 = $request->checkbox52;
        $form3->checkbox53 = $request->checkbox53;
        $form3->checkbox54 = $request->checkbox54;

        $form3->checkbox6 = $request->checkbox6;
        $form3->checkbox61 = $request->checkbox61;
        $form3->checkbox62 = $request->checkbox62;
        $form3->checkbox63 = $request->checkbox63;
        $form3->checkbox64 = $request->checkbox64;
        
        $form3->save();
        return redirect('create3');
    }
}
