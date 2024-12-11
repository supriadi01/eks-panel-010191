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
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
    <link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/viho/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/responsive.css">  

</head>
  <body class="dark-only">
    <canvas id="c" style="position: absolute; z-index: 0; top: 0; left: 0;"></canvas>
         <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">    
          <div class="loader-p"></div>
        </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <section>         
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-12">
              <div class="login-card">
                <form action="{{ route('loginaksi') }}" method="post" class="theme-form login-form">
                    @csrf
                    <img class="img-fluid" src="{{ asset('assets/images/logo/logo_panel.png')}}" alt="">
                    <center>
                        <h4>Login</h4>
                        <h6>Eksekutif Panel</h6><br>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                        @endif
                    </center>
                  <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                      <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="checkbox">
                      <input id="checkbox1" type="checkbox">
                      <label for="checkbox1">Remember password</label>
                    </div><a class="link" href="#">Forgot password?</a>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- page-wrapper end-->
      <!-- latest jquery-->
      <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>
      <!-- feather icon js-->
      <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="https://laravel.pixelstrap.com/viho/assets/js/sidebar-menu.js"></script>
      <script src="https://laravel.pixelstrap.com/viho/assets/js/config.js"></script>
      <!-- Bootstrap js-->
      <script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/popper.min.js"></script>
      <script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/bootstrap.min.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="https://laravel.pixelstrap.com/viho/assets/js/script.js"></script>
      <!-- login js-->
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