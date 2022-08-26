<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('/');
    }

    public function send(Request $request)
    {

            $request->session()->flash('message', 'Thanks for submitting your proposal. We wil get back to you soon');
            return redirect('/');
    }

    public function subscribe(Request $request)
    {
            $request->session()->flash('message', 'You have succesfully subscribed to our news letter');
            return redirect('/');
    }

    public function contact(Request $request)
    {
        $request->session()->flash('message', 'Thanks for contacting us, we will get back to you shortly');
        return redirect('/');
    }
    public function notify(Request $request)
    {
        $request->session()->flash('message', 'Thanks. You will be notified whenever we lunch an App');
        return redirect('/');
    }
}
