<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sisda - Sistem Satu Data Halmahera Selatan">
    <meta name="keywords" content="halsel, sisda, supriadihl">
    <meta name="author" content="supriadihl">
    <link rel="icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <title>SISDA - HALSEL</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome--> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/responsive.css">  
  </head>
  <body>

    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper modern-sidebar" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row m-0">
            <div class="main-header-left">
            <div class="logo-wrapper"><img class="img-fluid" src="{{ asset('assets/images/logo/logo_sisda.png')}}" alt=""></div>
            <div class="dark-logo-wrapper"><img class="img-fluid" src="{{ asset('assets/images/logo/logo_sisda.png')}}" alt=""></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
            </div>
            <div class="left-menu-header col">
            <ul>
                <li>
                <form class="form-inline search-form">
                    <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                    </div>
                </form>
                <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                </li>
            </ul>
            </div>
            <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                    <li>
                    <p class="f-w-700 mb-0">You have 1 Notifications<span class="pull-right badge badge-primary badge-pill">1</span></p>
                    </li>
                    <li class="noti-primary">
                    <div class="media">
                        <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                        <div class="media-body">
                        <p>Delivery processing </p>
                        <span>10 minutes ago</span>
                        </div>
                    </div>
                    </li>
                </ul>
                </li>
                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
               
                <li class="onhover-dropdown p-0">
                    <a href="{{ route('sisda.logout') }}" class="btn btn-primary-light"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="dropdown-item"><i data-feather="log-out"></i>Logout</a>
                        <form action="{{ route('sisda.logout') }}" id="logout-form" method="post">
                            @csrf
                        </form>
                </li>
            </ul>
            </div>
            <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper modern-sidebar">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
        <div class="sidebar-user text-center">
            <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="" />
            <div class="badge-bottom"><span class="badge badge-primary">User</span></div>
            <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
            <p class="mb-0 font-roboto">User SISDA</p>
        </div>
        <nav>
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav {{set_active('dashboard')}}" href="{{ route('dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        </nav>
    </header>
    <!-- Page Sidebar Ends-->
    <div class="page-body">

        @yield('content')
        
    <!-- footer start-->
    <footer class="footer">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
            <p class="mb-0">Copyright 2021-22 © Kominfo Halsel All rights reserved.</p>
            </div>
            <div class="col-md-6">
            <p class="pull-right mb-0">SISDA - Halmahera Selatan <i class="fa fa-heart font-secondary"></i></p>
            </div>
        </div>
        </div>
    </footer>
    </div><!-- Page Body Start-->
    </div><!-- page-wrapper Start-->

    <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- feather icon js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/sidebar-menu.js"></script>
    
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/script.js"></script>
    {{-- <script src="https://laravel.pixelstrap.com/viho/assets/js/theme-customizer/customizer.js"></script> --}}
    <!-- Plugin used-->  
  </body>
</html>
