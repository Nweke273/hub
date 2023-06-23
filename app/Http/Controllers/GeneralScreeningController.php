<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\GeneralScreening;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GeneralScreeningController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function StoreResult(request $request)
      {
        

        $request -> validate([
            'age' => 'required',
            'occupation'  => 'required',
            'motivation'  => 'required',
            'communication'  => 'required',
            'location'  => 'required',
            'laptop'  => 'required',
            'technical_background'  => 'required',
            'logical_reasoning'  => 'required',

        ]);

        GeneralScreening::insert([

            'fullName' => $request->fullName,
            'cEmail' => $request->cEmail,
            'age' => $request->age,
            'qualification' => $request->qualification,
            'occupation' => $request->occupation,
            'motivation' => $request->motivation,
            'communication' => $request->communication,
            'location' => $request->location,
            'laptop' => $request->laptop,
            'technical_background' => $request->technical_background,
            'logical_reasoning' => $request->logical_reasoning,
            'total' =>$request->age + $request->occupation + $request->motivation + $request->communication + $request->location + $request->laptop + $request->technical_background
            + $request->logical_reasoning,
            'created_at' =>Carbon::now(),

        ]);
       
      
        return redirect()->route('reg.applicants');
         
    }//end method


    public function GeneralResult() 
    {
        $result = GeneralScreening::latest()->paginate(5);
        $screening = Bootcamp::orderBy('firstName','ASC')->get();
        return view('admin.bootcamp.all_result_page',compact('result','screening'));
    }//end method

    public function ViewResult($id)
    {
        $result = GeneralScreening::findOrFail($id);
       
       
            
       
      return view('admin.bootcamp.view_result',compact('result'));
    } //end method
}
