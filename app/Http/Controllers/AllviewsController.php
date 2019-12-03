<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

use File;

class AllviewsController extends Controller
{
	 public function index()
    {
	    $info = Information::orderBy('id', 'asc')->first();
	    return view('frontend.test',compact('info'));
	 }


	public function download($id)
   {
       $myfile = Information::find($id);

       if (isset($myfile)) {
           if (isset($myfile->pdf)) {
               $file_path = public_path('file/' . $myfile->pdf);

               return response()->download($file_path);
           } else {
               return redirect('/')->with('error', 'Sorry!! File is not available here.');
           }
       }
   }
}

