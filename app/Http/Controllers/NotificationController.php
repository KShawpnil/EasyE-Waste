<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\StatusUpdate;

class NotificationController extends Controller
{
    public function notification(Request $request){
        $name=$request->name;
        event(new StatusUpdate($name));
        return redirect('/home');
    }
}
