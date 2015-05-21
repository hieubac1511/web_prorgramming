<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>our Restaurant</title>
    <!--GOOGLE FONT -->
    
    <!--BOOTSTRAP MAIN STYLES -->

    <link href="/style/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/style/css/private.css" rel="stylesheet" />
    <link href="/style/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/style/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/style/css/private.css" rel="stylesheet" />
    <script src = "/style/js/jquery.js"type="text/javascript"></script>
    <script src = "/style/js/bootstrap.min.js" type="text/javascript"></script>
    <script src = "/style/js/jquery.js"type="text/javascript"></script>
     <style>
      #carousel-example-generic{
        width: 1170px;
        margin:50px 0 0 0px;
        margin-right: 428px;￼ 
        margin-left: 491px;
        height: 30%;
      }
     </style>
</head>
<!--END HEAD SECTION -->
<body background="/style/img/background-full.jpg">
    <!-- NAV SECTION -->
    <div class="header">
        <div class="navbar navbar-inverse navbar-fixed-top menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">FOUR RESTAURANT</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">MENU</a></li>
                        <li><a href="#">GALLERY</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="<?php echo URL::action('CheckoutController@getCheckout') ?>">BOOK A TABLE</a></li>
                    </ul>
                </div>
            </div>
        </div>
        

<!--END NAV SECTION -->
<!-- HOME SECTION -->

<!-- SLIDER SECTION -->
        <div class="container" style="padding: 0 0 0 0;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
                <ol class="carousel-indicators" >
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active" style="width: 1170px">
                <img src="/style/img/food1.jpg" alt="..." width="1170" height="400">
                <div class="carousel-caption">
                  <h3>food1</h3>
                </div>
    <div class="container">
    </div>
              </div>

              <div class="item" style="width: 1170px">
                <img src="/style/img/food2.jpg" alt="..." width="1170" height="400">
                <div class="carousel-caption">
                  <h3>food2</h3>
                </div>
              </div>
            
              <div class="item" style="width: 1170px; height: 732px">
                <img src="/style/img/food3.jpg" alt="..." width="1170" height="400">
                <div class="carousel-caption">
                  <h3>food3</h3>
                </div>
              </div>
          
            </div>

            <!-- Left and right controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" ></span>
                </a>
            </div>
        </div>
    </div>
    <!-- END SLIDER SECTION -->
    <div class="container padding">
    @yield('content')
    </div>
    <div class="container end">
        <div class="row main-low-margin ">
            <div class="col-md-4 col-sm-4 text-center">
               <div class="grid_4">
                    <h2 class="pad1">Welcome!</h2>
                    <p class="mrg2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a class="a1" href="#">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="grid_4">
                    <h2 class="pad1">About <span>US</span></h2>
                    <div class="brd2">
                        <span>Lorem ipsum dolor sit</span>
                        Dolor sit amet conse ctetur adipisicing elit sed
                    </div>

                    <div class="brd2">
                        <span>Dolor sit amet conse</span>
                        Excepteur sint occaecat cupidatat non proident
                    </div>

                    <div class="brd2 mrg3">
                        <span>Ipsum dolor sit amet conse</span>
                        Amet conse ctetur adipisicing elit sed
                    </div>
                    <a class="a1" href="#">Read more</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="grid_4">
                    <div class="ban1">
                        <h2>Book <span>A TABLE</span></h2>
                        <p>Lorem ipsum dolor sit amet conse ctetur</p>
                        <a class="a2" href="#">Book A Table</a>
                    </div>
                    
                    <div class="ban2">
                        <h2>Our <span>Contacts</span></h2>
                        <p>Cepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
                    </div>
            </div>
        </div>

        </div>

        </div>
    </div>
    <div class="space-bottom"></div>    
</body>
</html>
