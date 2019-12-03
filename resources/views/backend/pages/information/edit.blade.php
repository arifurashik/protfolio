@extends('backend.layouts.master')
@section('content')

           
                <div class="text-center custom-login">
                    <h3>Add Your Information</h3>
                    <p>Admin template with very clean and aesthetic style prepared for your next app. </p>
                </div>
                 @include('backend.partials.messages')
                <div class="hpanel" style="align-self: center;">
                    <div class="panel-body ">
                        <form method="post"  action="{{ route('information.update', $information->id)}}" id="" enctype="multipart/form-data">
                            @method('patch')
                            {{ csrf_field() }}
                           
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label> Your Name</label>
                                    <input name="name" class="form-control" value="{{ $information->full_name }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Your Location</label>
                                    <input name="location" type="text" class="form-control" value="{{ $information->location }}" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Father Name</label>
                                    <input name="father_name" type="text" class="form-control" value="{{ $information->father_name }}" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Mother Name</label>
                                    <input name="mother_name" type="text" class="form-control" value="{{ $information->mother_name }}" >
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Present Address</label>
                                    <textarea name="present_address" class="form-control">{{ $information->present_address }}</textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Permanent Address</label>
                                    <textarea name="permanent_address" class="form-control">{{ $information->permanent_address }}</textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Date Of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control" value="{{ $information->date_of_birth }}" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Height</label>
                                    <input name="height" type="text" class="form-control" value="{{ $information->height }}" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Religion</label>
                                    <input name="religion" type="text" class="form-control" value="{{ $information->religion }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Nationality</label>
                                    <input name="nationality" type="text" class="form-control" value="{{ $information->nationality }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Degree</label>
                                    <input name="last_degree" type="text" class="form-control" value="{{ $information->last_degree }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Professional Degree</label>
                                    <input name="professional_degree" type="text" class="form-control" value="{{ $information->professional_degree }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone</label>
                                    <input name="phone" type="text" class="form-control" value="{{ $information->phone }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control" value="{{ $information->email }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Web Site</label>
                                    <input name="website" type="text" class="form-control" value="{{ $information->website }}" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Career Level</label>
                                    <input name="career_level" type="text" class="form-control" value="{{ $information->career_level }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input name="experience" type="text" class="form-control" value="{{ $information->experience }}" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Career Summary</label>
                                    <textarea name="summary" class="form-control">{{ $information->summary }}</textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Marital Status</label><br>
                                    <select name="marital_status">
                                        
                                        <option value="{{ $information->marital_status }}">{{ $information->marital_status }}</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <div class="form-group col-lg-6">
                                        <label>Your Image</label>
                                        <input type="file" name="image" >
                                    </div>
                                    <div class="form-group col-lg-6">
                                         <img height="50" width="50" src="{!!asset('img/portfolio/'.$information->image)!!}"
                            alt="{{ $information->full_name}}">

                                        <input type="hidden" name="old_img" value="{{$information->image }}">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    
                                    <label>Add pdf File</label>
                                    <input type="file" name="pdf">

                                    <input type="hidden" name="old_pdf" value="{{$information->pdf }}">

                                </div>
                                <div class="form-group col-lg-6">
                                    <div class="form-group col-lg-6">
                                        
                                        <label>Add QR Code</label>
                                        <input type="file" name="qrimage">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <img height="50" width="50" src="{!!asset('img/portfolio/'.$information->qrimage)!!}"
                            alt="{{ $information->full_name}}">

                                        <input type="hidden" name="old_qrimg" value="{{$information->qrimage }}">
                                    </div>
                                </div>
                            </div><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn">Update</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
         

      <!-- main-panel ends -->
@endsection