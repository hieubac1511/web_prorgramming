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

    <link href="/style/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/style/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/style/css/private.css" rel="stylesheet" />
    <script src = "/style/js/boostrap.min.js" type="text/javascript"></script>
    <script src = "/style/js/jquery.js"type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <style>
      #carousel-example-generic{
        width: 1162px;
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
            <div class="container" style="border-style:none;">
                <div class="navbar-header" style="width:200px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/" >GREEN MOON</a>
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
    </div>

<!--END NAV SECTION -->
<!-- HOME SECTION -->

<!-- SLIDER SECTION -->
    <div class="container" style="padding: 0 0 0 0;margin:auto;">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding: 0 0 0 0;margin:auto;">
        <!-- Indicators -->
            <ol class="carousel-indicators" >
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" style="width: 1168px; height: 732px">
              <img src="/style/img/food1.jpg" alt="..." width="1168" height="400">
            </div>
          <div class="item" style="width: 1168px; height: 732px">
            <img src="/style/img/food2.jpg" alt="..." width="1168" height="400">
            
          </div>
        
          <div class="item" style="width: 1168px; height: 732px">
            <img src="/style/img/food3.jpg" alt="..." width="1168" height="800">
            
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
    <!-- END SLIDER SECTION -->
    <div class="container padding">
    @yield('content')
    </div>
    <div class="container end">
        <div class="row main-low-margin ">
            <div class="col-md-4 col-sm-4 text-center ">
               <div class="grid_4">
                    <h2 class="pad1">Welcome!</h2>
                    <p class="mrg2">Toạ lạc tại khu vực Chợ lớn, Nhà hàng Green Moon – một thương hiệu quen thuộc với 
người dân thành phố – đã tạo ấn tượng thật đặc biệt cho những ai một lần đến nơi này. 
Khuôn viên sân vườn xanh mát khoe sắc nhiều chủng loại hoa phong lan tạo nên một thiên 
nhiên trong lành giữa lòng thành phố. Vào buổi sáng ban mai, bạn có thể chọn cho mình 
một góc vườn và ngồi thưởng thức những món điểm tâm Hongkong đặc sắc.</p>
                    <a class="a1" href="#">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center ">
                <div class="grid_4">
                    <h2 class="pad1">About <span>US</span></h2>
                    <div class="brd2">
                        <span>Chefs</span>
                        Bốn đầu bếp Ấn độ với kỹ năng hoàn hảo trong nghệ thuật ẩm thực 
                    </div>

                    <div class="brd2">
                        <span>Views</span>
                        Khu vực ăn tối riêng biệt và ấm cúng cho gia đình, nhóm người.
Khu vực dành cho những bữa tiệc trong nhà cho những khách hàng quen cho khoảng 50 người
Ẩm thực ngoài trời được chuẩn bị và phục vụ bởi những đầu bếp Ấn độ của chúng tôi sẽ phục vụ các bạn bánh mì và Kebab nóng được nướng bằng than.
Dịch vụ giao đồ ăn tận nhà miễn phí trong khu vực hợp lý, hoàn toàn nhanh và tươi trong những thùng chứa đồ ăn giữ nhiệt.
                    </div>

                    <div class="brd2 mrg3">
                        <span>Foods</span>
                        Các loại Hải sản đặc trưng của nhà hàng gồm có: Tôm Hùm, Cá Trình, Cá Tầm, Cá Mặt Quỷ, Ốc Vòi Voi, Ốc Hoàng Hậu, Ốc Kèn..
                    </div>
                    <a class="a1" href="#">Read more</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
                <div class="grid_4">
                    <div class="ban1" >
                        <h2>Book <span>A TABLE</span></h2>
                        <p style="color : #fff;">Hãy sử dụng dịch vụ Book Online để được hỗ trợ tốt hơn !</p>
                        <a class="a2" href="<?php echo URL::action('CheckoutController@getCheckout') ?>">Book A Table</a>
                    </div>
                    
                    <div class="ban2">
                        <h2>Our <span>Contacts</span></h2>
                        <p style="color : orange;">Nhà hàng Green Moon</p>
                        <p style="color : orange;">Ðịa chỉ 268 Lý Thường Kiệt,P15, Q.11, TP Hồ Chí Minh.</p>  
                        <p style="color : orange;">Ðiện thoại: (08) 38000000  .Fax: (08) 38000001 </p>
                        <p style="color : orange;">Ðịa chỉ E-mail: info@****.com.vn .Website: www.****.com </p>
                        <p style="color : orange;">Liên hệ đặt tiệc: Phòng đặt tiệc: 0906 723 734 (Mr.Four)</p>
                    </div>
            </div>
        </div>

        </div>

        </div>
    </div>
    <div class="space-bottom"></div>    
</body>
</html>
