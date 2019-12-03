@extends('backend.layouts.master')
@section('content')

           
                <div class="text-center custom-login">
                    <h3>Add Your Information</h3>
                    <p>Admin template with very clean and aesthetic style prepared for your next app. </p>
                </div>
                 @include('backend.partials.messages')
                <div class="hpanel" style="align-self: center;">
                    <div class="panel-body ">
                        <form method="post"  action="{{ route('information.store')}}" id="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label> Your Name</label>
                                    <input name="name" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Your Location</label>
                                    <input name="location" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Father Name</label>
                                    <input name="father_name" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Mother Name</label>
                                    <input name="mother_name" type="text" class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Present Address</label>
                                    <textarea name="present_address" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Permanent Address</label>
                                    <textarea name="permanent_address" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Date Of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Height</label>
                                    <input name="height" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Religion</label>
                                    <input name="religion" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Nationality</label>
                                    <input name="nationality" type="text" class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Last Degree</label>
                                    <input name="last_degree" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Professional Degree</label>
                                    <input name="professional_degree" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone</label>
                                    <input name="phone" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Web Site</label>
                                    <input name="website" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Career Level</label>
                                    <input name="career_level" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input name="experience" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Career Summary</label>
                                    <textarea name="summary" class="form-control"></textarea>
                                </div>

                                
                                <div class="form-group col-lg-6">
                                    <label>Marital Status</label><br>
                                    <select name="marital_status">
                                        <option>Select Your Marital Status</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Your Image</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Add pdf File</label>
                                    <input type="file" name="pdf">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Add QR Code</label>
                                    <input type="file" name="qrimage">
                                </div>
                            </div><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn">Add</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
         

      <!-- main-panel ends -->
@endsection