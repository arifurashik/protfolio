<div class="col-md-4">
    <div class="side-bar"> 

    @php
        if(isset($info)){

        @endphp
        <!-- Professional Details -->
        <h5 class="tittle">{{ $info->full_name }}</h5>
        <img src="{{asset('img/portfolio/'.$info->image)}}" alt="image"class="img-responsive">
        <img src="{{asset('img/portfolio/'.$info->qrimage)}}" alt="image"  class="img-responsive" >

        <!-- Attachments -->
        <h5 class="tittle">Attachments</h5>
        <div class="attach bor-btm padding-25">
            <ul>
                <li>
                    <p><img src="{{asset('assets/images/pdf-icon.jpg')}}" alt="" > Download PDF Resume <a href="{{route('myfile.download',$info->id)}}" target="_blank"><i class="fa fa-cloud-download"></i></a> </p>
                </li>

            </ul>
        </div>
    @php
        }
        @endphp

        <!-- Social Profiles -->
        <h5 class="tittle">Social Profiles</h5>
        <div class="social-icon bor-btm padding-25">
            <ul>
                <li> <a href="https://www.facebook.com/arifura1" target="_blank"> <i class="fa fa-facebook"></i></a> </li>
                
                <li> <a href="https://twitter.com/arifurashik" target="_blank"> <i class="fa fa-twitter"></i></a> </li>
                <li> <a href="https://www.linkedin.com/in/arifur-ashik-0a1513a6/" target="_blank"> <i class="fa fa-linkedin"></i></a> </li>
                <li> <a href="https://join.skype.com/invite/PIVAqT9TAg4n" target="_blank"> <i class="fa fa-skype"></i></a> </li>
            </ul>
        </div>


    </div>
</div>