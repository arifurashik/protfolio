<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>admin || arifurashik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">

    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}"> -->
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
	
	    <!-- notifications CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notifications/Lobibox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notifications/notifications.css') }}">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
 
<!--   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->

<body>
<!-- Desktop Menu start -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
<!-- logo start -->      
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('img/logo/logo.png') }}"alt="" /></a>
            <strong><img src="{{ asset('img/logo/logo.png') }}" alt="" /></strong>
        </div>
<!-- logo end --> 

        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
				
                    <li class="active">
                        <a class="has-arrow" href="index.html">
							   <i class="fa big-icon fa-home icon-wrap"></i>
							   <span class="mini-click-non">Information</span>
							</a>
                        <ul class="submenu-angle" aria-expanded="true">
                            
                            <li><a title="Product List" href="{{ route('information.index')}}"><i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Your Information</span></a></li>
                            <li><a title="Product Edit" href="{{ route('information.create')}}"><i class="fa fa-bolt sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Add Information</span></a></li>
							
                        </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Peity Charts" href="static-table.html"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Static Table</span></a></li>
                            <li><a title="Data Table" href="data-table.html"><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Table</span></a></li>
                        </ul>
                    </li>
                 
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-desktop icon-wrap"></i> <span class="mini-click-non">App views</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Notifications" href="notifications.html"><i class="fa fa-external-link-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Notifications</span></a></li>
                            <li><a title="Alerts" href="alerts.html"><i class="fa fa-crop sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Alerts</span></a></li>
                            <li><a title="Modals" href="modals.html"><i class="fa fa-building sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Modals</span></a></li>
                            <li><a title="Buttons" href="buttons.html"><i class="fa fa-adjust sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Buttons</span></a></li>
                            
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-files-o icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="login.html"><i class="fa fa-hand-rock-o sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Login</span></a></li>
                            <li><a title="Register" href="register.html"><i class="fa fa-plane sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Register</span></a></li>
                        </ul>
                    </li>
                    <li><a title="Landing Page" href="#" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Landing Page</span></a></li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Desktop Menu End -->

<!-- Start Welcome area -->
<div class="all-content-wrapper">
<!-- logo start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
<!-- logo end -->
<!-- Top nav start -->

    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="header-top-wraper">
                         <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
											<i class="fa fa-bars"></i>
									</button>
                                </div>
                            </div>
	    <!-- Top nav left -->
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        <!-- Top nav left -->
        <!-- Top nav Right -->	
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">

                      @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                    <span class="admin-name">{{ Auth::user()->name }}</span>
                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                </a>

                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                    <li><a class="nav-link dropdown-toggle " href="{{ route('logout') }}"

                                        data-toggle="dropdown" role="button" aria-expanded="false"

                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fa fa-lock author-log-ic"></span>
                                        {{ __('Logout') }}
                                    
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                </ul>
                            </li>
                        @endguest



                                    </ul>
                                </div>
                            </div>
        <!-- Top nav Right End -->  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Top nav start -->
		
<!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="product-list.html">Product List</a></li>
                                            <li><a href="product-edit.html">Product Edit</a></li>
                                        </ul>
                                    </li>

                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
									
                                    
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a title="Notifications" href="notifications.html">Notifications</a></li>
											<li><a title="Alerts" href="alerts.html">Alerts</a></li>
											<li><a title="Modals" href="modals.html">Modals</a></li>
											<li><a title="Buttons" href="buttons.html">Buttons</a></li>
										   
                                        </ul>
                                    </li>
									
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
<!-- Mobile Menu end -->

<!-- bradcam  start -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">

                            <!-- bradcam left start -->  
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                            <!-- bradcam left end -->

                            <!-- bradcam right start -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard V.1</span>
                                        </li>
                                    </ul>
                                </div> -->
                            <!-- bradcam right end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- bradcam end -->

<!-- main section    -->
    <div class="product-sales-area mg-tb-30 min-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @yield('content')
                </div>
                
            </div>
        </div>
    </div>
<!-- main section    --> 
    
    
    
<!-- Footer -->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">ArifurAshik</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->

</div>

    <!-- jquery
		============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
	
	    <!-- tab JS
		============================================ -->
    <script src="{{ asset('js/tab.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('js/icheck/icheck-active.js') }}"></script>
	
	<!-- data table JS
		============================================ -->
    <script src="{{ asset('js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-export.js') }}"></script>
	
	<!--  editable JS
		============================================ -->
    <script src="{{ asset('js/editable/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('js/editable/mock-active.js') }}"></script>
    <script src="{{ asset('js/editable/select2.js') }}"></script>
    <script src="{{ asset('js/editable/moment.min.js') }}"></script>
    <script src="{{ asset('js/editable/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/editable/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('js/editable/xediable-active.js') }}"></script>
	
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
    <!-- <script src="{{ asset('js/morrisjs/morris.js') }}"></script> -->
    <!-- <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script> -->
	
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
	
    <!-- calendar JS
		============================================ -->
    <!-- <script src="{{ asset('js/calendar/moment.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script> -->
	
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
	
    <!-- main JS
		============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>