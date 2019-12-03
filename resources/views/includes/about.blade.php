<div role="tabpanel" class="tab-pane fade in active" id="about-me">
    <div class="inside-sec"> 
        <!-- BIO AND SKILLS -->
        <h5 class="tittle">About Me</h5>

        <!-- Blog -->
        <section class="about-me padding-top-10"> 



        @php
            if(isset($info)){

        @endphp
            <!-- Personal Info -->
            <ul class="personal-info">
                <li>
                    <p> <span> Name</span> {{ $info->full_name }} </p>
                </li>
                <li>
                    <p> <span> Birthday</span> {{ $info->date_of_birth }}  </p>
                </li>
                <li>
                    <p> <span> Location</span> {{ $info->location }} </p>
                </li>
                <li>
                    <p> <span> Experience</span> {{ $info->experience }}</p>
                </li>
                <li>
                    <p> <span> Religion</span> {{ $info->religion }} </p>
                </li>
                <li>
                    <p> <span> Degree</span> {{ $info->last_degree }}</p>
                </li>
                <li>
                    <p> <span> Career Level</span> {{ $info->career_level }} </p>
                </li>
                <li>
                    <p> <span> Phone</span><a href="tel:{{ $info->phone }}"> {{ $info->phone }}</a></p>
                </li>
                
                <li>
                    <p> <span> E-mail</span> <a href="{{ $info->email }}"> {{ $info->email }}</a> </p>
                </li>
                <li>
                    <p> <span> Website</span><a href="{{ $info->website }}"> {{ $info->website }}</a></p>
                </li>
            </ul>
        

            <!-- I’m Web Designer -->
            <h5 class="tittle">I’m Full Stack Web Developer</h5>
            <div class="padding-20">
                <p>{{ $info->summary }}.<br>
                 <!--    <br>
                    Experienced Web Developer adept in all stages of advanced web development. Knowledgeable in user interface, testing, and debugging processes. Bringing forth expertise in design, installation, testing and maintenance of web systems. Equipped with a diverse and promising skill-set. Proficient in an assortment of technologies, including JPHP, Laravel, CodeIgniter, React, JavaScript/jQuery, AngularJS, HTML/HTML5, CSS/CSS3, Bootstrap, AJAX, MySQL, Apache and other similar systems. Able to effectively self-manage during independent projects, as well as collaborate in a team setting.<br>
                    <br> -->
                </p>
            </div>
        @php
             }
        @endphp
            <!-- Skills -->
            <h5 class="tittle">Skills Summary</h5>

            <!-- Sound Engineering -->
            <div class="panel-group accordion padding-20" id="accordion">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-sm-4"> 
                            <!-- PANEL HEADING -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"> Back-End</a> </h4>
                            </div>
                        </div>

                        <!-- Skillls Bars -->
                        <div class="col-sm-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                            </div>

                            <!-- Skillls Text -->
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>PHP, Laravel, CodeIgniter, JavaScript, jQuery, MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-sm-4"> 
                            <!-- PANEL HEADING -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed"> CMS</a> </h4>
                            </div>
                        </div>

                        <!-- Skillls Bars -->
                        <div class="col-sm-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"> <span class="sr-only">70% Complete</span> </div>
                            </div>

                            <!-- Skillls Text -->
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Wordpress, Magento, WooCommerce</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Administration -->

                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-sm-4"> 
                            <!-- PANEL HEADING -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="collapsed"> Front-End</a> </h4>
                            </div>
                        </div>

                        <!-- Skillls Bars -->
                        <div class="col-sm-8">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"> <span class="sr-only">50% Complete</span> </div>
                            </div>

                            <!-- Skillls Text -->
                            <div id="collapsetwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>HTML, CSS, Bootstrap, AngularJS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>