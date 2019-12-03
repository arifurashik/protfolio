<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Image;
use File;
use Input;


class InformationController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Information::orderBy('id', 'asc')->first();
        return view('backend.pages.information.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('backend.pages.information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|max:50',
            'father_name' => 'required|max:50',
            'mother_name' => 'required|max:50',
            'present_address' => 'required|max:500',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|email',
            'website' => 'max:50',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'qrimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            "pdf" => 'mimes:pdf'
        ]);

        $hasImage = $request->hasFile('image');

        if ($hasImage) {
            $image = $request->file('image'); //Get File
            $img = str_replace(' ', '_', $request->name .'.' . $image->getClientOriginalExtension()); //Naming file

            
            $location = public_path('img/portfolio/' . $img); //Location
            Image::make($image)->save($location); //Sending file to location using srvice
        } else {
            $img = 'my_image.jpg';
        };



     $hasQrImage = $request->hasFile('qrimage');

        if ($hasQrImage) {
            $qr_image = $request->file('qrimage'); //Get File
            $qr_img = str_replace(' ', '-', $request->name . '.' . $qr_image->getClientOriginalExtension()); //Naming file
            $location = public_path('img/portfolio/' . $qr_img); //Location
            Image::make($qr_image)->save($location); //Sending file to location using srvice

        } else {
            $qr_img = 'QR.png';
        };


//file uplode

    $hasPdf = $request->hasFile('pdf');

        if ($hasPdf) {

            $file = $request->file('pdf');
            $fileName = str_replace(' ', '_', $request->name . '.' . $file->getClientOriginalExtension());

            $file->move(public_path('file/'), $fileName);


        }else{
            $fileName = Null;
        }



        $data = [
            'full_name' => $request->name,
            'location' => $request->location,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'date_of_birth' => $request->date_of_birth,
            'height' => $request->height,
            'religion' => $request->religion,

            'marital_status' => $request->marital_status,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'last_degree' => $request->last_degree,
            'professional_degree' => $request->professional_degree,

            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'career_level' => $request->career_level,

            'experience' => $request->experience,
            'summary' => $request->summary,
            'qrimage' => $qr_img,
            'image' => $img,
            'pdf' => $fileName,

        ];


        $information = new Information($data);

        $information->save();
        return redirect('information')->with('success', 'Your Information has created successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $information = Information::find($id);
        return view('backend.pages.information.edit',compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $request->validate([
            'name' => 'required|max:50',
            'father_name' => 'required|max:50',
            'mother_name' => 'required|max:50',
            'present_address' => 'required|max:200',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|email',
            'website' => 'max:50',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'qrimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            "pdf" => 'mimes:pdf'
        ]);

    $information = Information::find($id);

        $hasImage = $request->hasFile('image');

        $old_image = $request->old_img;


        $default = $old_image == "my_image.jpg";
        $not_default = $old_image != "my_image.jpg";

        if ($hasImage && $not_default) {

            $image = $request->file('image'); //Get File
            $img = str_replace(' ', '_', $request->name  . '.' . $image->getClientOriginalExtension()); //Naming file
            $location = public_path('img/portfolio/' . $img); //Location
            Image::make($image)->save($location); //Sending file to location using srvice

            if (File::exists('img/portfolio/' . $old_image)) {
                File::delete('img/portfolio/' . $old_image);
            }
        } elseif ($hasImage && $default) {

            $image = $request->file('image'); //Get File
            $img = str_replace(' ', '_', $request->name . '.' . $image->getClientOriginalExtension()); 
            //Naming file
            $location = public_path('img/portfolio/' . $img); //Location
            Image::make($image)->save($location); //Sending file to location using srvice

        } elseif ($default || $not_default) {

            $img = $information->image;
        } else {
            $img = 'my_image.jpg"';
        };


//QR image update   

        $hasQrImage = $request->hasFile('qrimage');

        $old_qrimage = $request->old_qrimg;


        $default_qr = $old_qrimage == "QR.png";
        $not_default_qr = $old_qrimage != "QR.png";

        if ($hasQrImage && $not_default_qr) {

            // dd('new old');

            $qr_image = $request->file('qrimage'); //Get File
            $qr_img = str_replace(' ', '-', $request->name  . '.' . $qr_image->getClientOriginalExtension()); //Naming file
            $location = public_path('img/portfolio/' . $qr_img); //Location
            Image::make($qr_image)->save($location); //Sending file to location using srvice

            if (File::exists('img/portfolio/' . $old_qrimage)) {
                File::delete('img/portfolio/' . $old_qrimage);
            }
        } elseif ($hasQrImage && $default_qr) {
             // dd('new d');

            $qr_image = $request->file('qrimage'); //Get File
            $qr_img = str_replace(' ', '-', $request->name . '.' . $qr_image->getClientOriginalExtension()); 
            //Naming file
            $location = public_path('img/portfolio/' . $qr_img); //Location
            Image::make($qr_image)->save($location); //Sending file to location using srvice

        } elseif ($default_qr || $not_default_qr) {
            // dd('old');

            $qr_img = $information->qrimage;
        } else {
            // dd('null');
            $qr_img = 'QR.png';
        };

   

// file Update
    $hasPdf = $request->hasFile('pdf');

    $old_pdf = $request->old_pdf;
// dd($old_pdf);
        if ($hasPdf) {

            if (File::exists('file/' . $old_pdf)) {
                File::delete('file/' . $old_pdf);
            }

            $file = $request->file('pdf');
            $fileName = str_replace(' ', '_', $request->name . '.' . $file->getClientOriginalExtension());

            $file->move(public_path('file/'), $fileName);

        }elseif(Storage::exists('file/'. $old_pdf)){
                $fileName = Null;
        }elseif (File::exists('file/' . $old_pdf)) {
           $fileName = $request->old_pdf;
       }







        $Update_data = [
            'full_name' => $request->name,
            'location' => $request->location,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'date_of_birth' => $request->date_of_birth,
            'height' => $request->height,
            'religion' => $request->religion,

            'marital_status' => $request->marital_status,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'last_degree' => $request->last_degree,
            'professional_degree' => $request->professional_degree,

            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'career_level' => $request->career_level,

            'experience' => $request->experience,
            'summary' => $request->summary,
            'qrimage' => $qr_img,
            'image' => $img,
            'pdf' => $fileName,

        ];


// dd($Update_data);
        $information->update($Update_data);

        return redirect('information')->with('success', 'Your Information has Updeted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $information = Information::find($id);
// dd($id);
        $old_image = $request->old_img;
        $default = $old_image == "my_image.jpg";
        $not_default = $old_image != "my_image.jpg";

        if ($not_default) {
            if (File::exists('img/portfolio/' . $old_image)) {
                File::delete('img/portfolio/' . $old_image);
            }
        }


        $old_qrimage = $request->old_qrimg;

        $default_qr = $old_qrimage == "QR.png";
        $not_default_qr = $old_qrimage != "QR.png";

        if ($not_default_qr) {
            if (File::exists('img/portfolio/' . $old_qrimage)) {
                File::delete('img/portfolio/' . $old_qrimage);
            }
        }



        $old_pdf = $request->old_pdf;

        if ($old_pdf) {

            if (File::exists('file/' . $old_pdf)) {
                File::delete('file/' . $old_pdf);
            }
        }


        $information->delete();


        return redirect('information')->with('success', 'Your Information has Successfully Deleted"');
    }
}


