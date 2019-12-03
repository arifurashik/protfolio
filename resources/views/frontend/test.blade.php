@include('includes.header')
        <!-- Page Wrapper -->
        <div id="wrap"> 

            <!-- Content -->
            <main class="cd-main-content">
                <div id="content">
                    <div class="resume">
                        <div class="container"> 


                            <!-- Resume -->
                            <div class="row"> 
                                <!--left Sidebar -->
                                
                                @include('includes.left_sidebar')

                                <!--End left Sidebar -->

                                <!-- MAIN CONTENT -->
                                <div class="col-md-8"> 

                                    <!-- nav manu -->              
                                    @include('includes.nav')
                                    <!-- nav menu end -->



                                    <div class="tab-content"> 
                                        <!-- about me -->
                                        @include('includes.about')
                                        <!-- about me  end-->

                                        <!-- resume -->
                                        @include('includes.resume')

                                        <!--end resume -->

                                        <!-- Skills -->
                                         @include('includes.skills')
                                         <!-- End Skills -->

                                        <!-- PORTFOLIO -->
                                        @include('includes.portfolio')

                                        <!-- Contact -->
                                        @include('includes.contact')
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- End Content --> 
@include('includes.footer')