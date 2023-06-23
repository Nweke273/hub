<?php

namespace App\Http\Controllers;
use App\Models\Bootcamp;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BootcampRegController extends Controller
{


    public function BootcampReg()
    {

        return view('layouts.pages.bootcamp_reg');

    }   // end  Method


    public function StoreBootcamp(Request $request)
    {

        $request -> validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',

        ]);

        Bootcamp::insert([

            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'qualification' => $request->qualification,
            'age' => $request->age,
            'created_at' =>Carbon::now(),

        ]);
        return redirect()->back();
    }// end  Method


    public function Logout()
    {
       Auth::logout();

       return redirect()->route('login');
    }// end  Method


   

    public function Applicants()
    {
        $applicants = Bootcamp::latest()->paginate(5); 
      
        return view('admin.bootcamp.reg_applicats',compact('applicants'));

    } // end  Method


    // public function TrashList(){
    //     //  $trashCat = Bootcamp::onlyTrashed()->latest()->paginate(3);
    //     return view('admin.bootcamp.trashList');

    // } // end  Method


     public function DeleteApplicant($id) {
     Bootcamp::findOrFail($id)->delete(); 
       return redirect()->back();

   }// end  Method

   
    public function ScreenApplicant($id){
       $screening = Bootcamp::findOrFail($id);

        return view('admin.bootcamp.screening',compact('screening'));

    }// end  Method
}
