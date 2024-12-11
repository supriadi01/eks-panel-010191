<!DOCTYPE html>
<html lang="en" style="--theme-deafult: #d97f3d; --theme-secondary: #f25f4c;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dibuat oleh Supriadi HL">
    <meta name="keywords" content="eksekutif panel, Halsel, Babang, supriadihl">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <title>Eksekutif Panel - HALSEL</title>
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
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
    <link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/viho/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/responsive.css">  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    @stack('api-apresia')

</head>
  <body class="dark-only">
    
     <!-- Loader starts-->
     <div class="loader-wrapper">
      <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
          <div class="main-header-right row m-0">
            <div class="main-header-left">
              <div class="logo-wrapper"><a href="/"><img class="img-fluid" src="https://laravel.pixelstrap.com/viho/assets/images/logo/logo.png" alt=""></a></div>
              <div class="dark-logo-wrapper"><a href="/"><img class="img-fluid" src="{{ asset('assets/images/logo/logo_panel.png')}}" alt=""></a></div>
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
                <li class="onhover-dropdown p-0">
                  <a href="{{ route('logoutaksi') }}"class="btn btn-primary-light"><i data-feather="log-out"></i>Log out</a>
                    {{-- <form id="logout-form" action="{{ route('logoutaksi') }}" method="POST" class="d-none">
                        @csrf
                    </form> --}}
                </li>
              </ul>
            </div>
            <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
          </div>
      </div>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
  <header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
        <p class="mb-0 font-roboto">Human Resources Department</p>
        <ul>
            <li>
                <span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li>
                <span>2 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li>
        </ul>
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
                        <a class="nav-link menu-title " href="{{route('home')}}"><i data-feather="home"></i><span>Dashboard</span></a>                  
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('cctv')}}"><i data-feather="video"></i><span>CCTV</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('pencaker')}}"><i data-feather="users"></i><span>Pencaker</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('blt')}}"><i data-feather="gift"></i><span>BLT</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('stunting')}}"><i data-feather="users"></i><span>Stunting</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('apresia')}}"><i data-feather="smartphone"></i><span>Realisasi Anggaran</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{route('aduan')}}"><i data-feather="phone-incoming"></i><span>Aduan Masyarakat</span></a>
                    </li>
                    
                  
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{ route('people')}}"><i data-feather="user-check"></i><span>People</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="{{ route('rsud')}}"><i data-feather="plus-square"></i><span>RSUD</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>BMKG</span></a>
                    </li>
                    
                    
                    
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
  </header>
    <!-- Page Sidebar Ends-->
   
    <div class="page-body">
        <canvas id="c" style="position: absolute; z-index: 0; top: 0; left: 0;"></canvas>
        @yield('content')
        
    
    </div><!-- Page Body Start-->
    </div><!-- page-wrapper Start-->



    <script type="text/javascript">
        // localStorage.clear();
        var div = document.querySelector("div.page-wrapper")
        if(div.classList.contains('compact-sidebar')){
            div.classList.remove("compact-sidebar");
        }
        if(div.classList.contains('modern-sidebar')){
            div.classList.remove("modern-sidebar");
        }
        localStorage.setItem('page-wrapper', 'page-wrapper compact-wrapper compact-sidebar');
        localStorage.setItem('page-body-wrapper', 'sidebar-icon');            
    </script>

    <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/sidebar-menu.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/popper.min.js"></script>
    {{-- <script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/bootstrap.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/chart/google/google-chart-loader.js')}}"></script>
    <script src="{{ asset('assets/js/chart/google/google-chart.js')}}"></script>

    <script src="https://laravel.pixelstrap.com/viho/assets/js/prism/prism.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/clipboard/clipboard.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/counter/counter-custom.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/custom-card/custom-card.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/general-widget.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/height-equal.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/tooltip-init.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/script.js"></script>
    {{-- <script src="https://laravel.pixelstrap.com/viho/assets/js/theme-customizer/customizer.js"></script> --}}
    <!-- Plugin used-->  
    <script>
        // geting canvas by Boujjou Achraf
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");

        //making the canvas full screen
        c.height = window.innerHeight;
        c.width = window.innerWidth;

        //chinese characters - taken from the unicode charset
        var matrix = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%+-/~{[|`]}";
        //converting the string into an array of single characters
        matrix = matrix.split("");

        var font_size = 10;
        var columns = c.width/font_size; //number of columns for the rain
        //an array of drops - one per column
        var drops = [];
        //x below is the x coordinate
        //1 = y co-ordinate of the drop(same for every drop initially)
        for(var x = 0; x < columns; x++)
            drops[x] = 1; 

        //drawing the characters
        function draw()
        {
            //Black BG for the canvas
            //translucent BG to show trail 24695c
            ctx.fillStyle = "rgba(0, 0, 0, 0.04)";
            ctx.fillRect(0, 0, c.width, c.height);

            ctx.fillStyle = "#24695c";//green text
            ctx.font = font_size + "px arial";
            //looping over drops
            for(var i = 0; i < drops.length; i++)
            {
                //a random chinese character to print
                var text = matrix[Math.floor(Math.random()*matrix.length)];
                //x = i*font_size, y = value of drops[i]*font_size
                ctx.fillText(text, i*font_size, drops[i]*font_size);

                //sending the drop back to the top randomly after it has crossed the screen
                //adding a randomness to the reset to make the drops scattered on the Y axis
                if(drops[i]*font_size > c.height && Math.random() > 0.975)
                    drops[i] = 0;

                //incrementing Y coordinate
                drops[i]++;
            }
        }

        setInterval(draw, 35);

    </script>
  </body>
</html>
