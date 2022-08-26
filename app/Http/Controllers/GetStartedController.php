<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetStartedController extends Controller
{
    public function index(){
        return view('/');
    }

    public function send(Request $request)
    {
        // notify('', 'Glam Profile details successfully updated', 'green', 'topCenter', 'fa fa-check-circle');
        // return redirect('/');
        $request->session()->flash('status','We will respond to your proposal shortly');
        return view('welcome');
    }
}
