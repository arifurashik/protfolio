@extends('backend.layouts.master')
@section('content')

 @include('backend.partials.messages')
<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Your Informationt</h4>
                    <div class="add-product">
                        <a href="{{route ('information.create')}}">Add Your Information</a>
                    </div>
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>QR Image</th>
                            <th>Name</th>
                            <th>Professional Degree</th>
                            <th>Phone</th>
                            <th>Web Site</th>
                            <th>Career Level</th>
                            <th>Marital Status</th>
                            <th>Setting</th>
                        </tr>

                @php
                if(isset($info)){

                @endphp
                        <tr>
                            <td><img src="{{asset('img/portfolio/'.$info->image)}}" alt="image" width="100"></td>
                            <td><img src="{{asset('img/portfolio/'.$info->qrimage)}}" alt="image" width="100"></td>
                            <td>{{ $info->full_name }}</td>
                            <td>{{ $info->professional_degree }}</td>
                            <td>{{ $info->phone }}</td>
                            <td>{{ $info->website }}</td>
                            <td>{{ $info->career_level }}</td>
                            <td>{{ $info->marital_status }}</td>
                            <td>
                                <a href="{{route ('information.edit', $info->id)}}">
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                </a>
                                 
                                <form action="{{route ('information.destroy', $info->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')

                                  <input type="hidden" name="old_img" value="{{$info->image }}">
                                  <input type="hidden" name="old_qrimg" value="{{$info->qrimage }}">
                                  <input type="hidden" name="old_pdf" value="{{$info->pdf }}">

                                 <button type="submit" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                              </form>
                            
                            </td>
                        </tr>

                    @php
                    }
                    @endphp
                        

                        
                                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- 
    <tr>
        <th>Image</th>
        <th>QR Image</th>
        <th>Name</th>
        <th>Your Location</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Date Of Birth</th>
        <th>Height</th>
        <th>Religion</th>
        <th>Nationality</th>
        <th>Last Degree</th>
        <th>Professional Degree</th>
        <th>Phone</th>
        <th>E-mail</th>
        <th>Web Site</th>
        <th>Career Level</th>
        <th>Marital Status</th>
        <th>Setting</th>
    </tr>
    <tr>
        <td><img src="img/new-product/5-small.jpg" alt="" /></td>
        <td><img src="img/new-product/5-small.jpg" alt="" /></td>
        <td>Ashik</td>
        <td>Mohammdpur, Dhaka</td>
        <td>Harizul</td>
        <td>Lotifa</td>
        <td>Birth day</td>
        <td>5.8"</td>
        <td>Islam</td>
        <td>Bangladeshi</td>
        <td>Mastars</td>
        <td>IT Diploma</td>
        <td>01717796906</td>
        <td>Arifur.asifoo7@gmail.com</td>
        <td>arifurashik.me</td>
        <td>entry</td>
        <td>Unmarred</td>
        <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </td>
    </tr>-->
@endsection