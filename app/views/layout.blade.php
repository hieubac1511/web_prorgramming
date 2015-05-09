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
    <title>Bootstrap Mutipager Template - Maxop</title>
    <!--GOOGLE FONT -->
    
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src = "style/js/boostrap.min.js" type="text/javascript"></script>
    <script src = "style/js/jquery.js"type="text/javascript"></script>
</head>
<!--END HEAD SECTION -->
<body>
    <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">YOUR LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="pricing.html">PRICING</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!--END NAV SECTION -->
    <!-- HOME SECTION -->

    <!-- SLIDER SECTION -->
    <div id="banner">
        <img src="style/img/ngoc_trinh.jpg">
        <img src="style/img/ngoc_trinh.jpg">
    </div>
    <!-- END SLIDER SECTION -->
    @yield('content')
    <div id="footer">
        <div class="row">
            <div class="col-md-4">
                <h4>Quick Information :</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                </p>
                <button type="submit" class="btn btn-primary">Get Quote</button>
            </div>
            <div class="col-md-4">
                <h4>Need Help ? Write Us. </h4>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <a href="#"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>
                <hr>
                <p>
                    103, New Street,<br>
                    New York, USA.<br>
                    Call: +23-00-89-009<br>
                    Email: demo@yourdomain.com<br>
                </p>

                2014 www.yourdomain.com | All Right Reserved
            </div>
        </div>


    </div>
</body>
</html>
