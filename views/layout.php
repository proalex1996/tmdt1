<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Hexa</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
  
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="?controller=home&action=home" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <ul class="nav">
                           <?php if($controller == 'home'){?>
                            <li class="scroll-to-section"><a href="?controller=home&action=home" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="?controller=products&action=home">Điện thoại</a></li>
                            <li class="scroll-to-section"><a href="?controller=tablets&action=home">Máy Tính bảng</a></li>
                            <li class="scroll-to-section"><a href="?controller=laptop&action=home">LapTop</a></li>
                            <li class="scroll-to-section"><a href="?controller=pk&action=home">Phụ kiện</a></li>
                            <?php } else if($controller == 'products') {?>
                                <li class="scroll-to-section"><a href="?controller=home&action=home">Home</a></li>
                            <li class="scroll-to-section"><a href="?controller=products&action=home"  class="active">Điện thoại</a></li>
                            <li class="scroll-to-section"><a href="?controller=tablets&action=home">Máy Tính bảng</a></li>
                            <li class="scroll-to-section"><a href="?controller=laptop&action=home">LapTop</a></li>
                            <li class="scroll-to-section"><a href="?controller=pk&action=home">Phụ kiện</a></li>
                            <?php } else if($controller == 'tablets') {?>
                            <li class="scroll-to-section"><a href="?controller=home&action=home" class="">Home</a></li>
                            <li class="scroll-to-section"><a href="?controller=products&action=home">Điện thoại</a></li>
                            <li class="scroll-to-section"><a href="?controller=tablets&action=home" class="active" >Máy Tính bảng</a></li>
                            <li class="scroll-to-section"><a href="?controller=laptop&action=home">LapTop</a></li>
                            <li class="scroll-to-section"><a href="?controller=pk&action=home">Phụ kiện</a></li>
                            <?php } else if($controller == 'pk') {?>
                            <li class="scroll-to-section"><a href="?controller=home&action=home" class="">Home</a></li>
                            <li class="scroll-to-section"><a href="?controller=products&action=home">Điện thoại</a></li>
                            <li class="scroll-to-section"><a href="?controller=tablets&action=home" >Máy Tính bảng</a></li>
                            <li class="scroll-to-section"><a href="?controller=laptop&action=home">LapTop</a></li>
                            <li class="scroll-to-section"><a href="?controller=pk&action=home" class="active" >Phụ kiện</a></li>
                            <?php } else if($controller == 'laptop') {?>
                            <li class="scroll-to-section"><a href="?controller=home&action=home" class="">Home</a></li>
                            <li class="scroll-to-section"><a href="?controller=products&action=home">Điện thoại</a></li>
                            <li class="scroll-to-section"><a href="?controller=tablets&action=home"  >Máy Tính bảng</a></li>
                            <li class="scroll-to-section"><a href="?controller=laptop&action=home" class="active">LapTop</a></li>
                            <li class="scroll-to-section"><a href="?controller=pk&action=home">Phụ kiện</a></li>
                            <?php } else {?>
                            <li class="scroll-to-section"><a href="?controller=home&action=home" class="">Home</a></li>
                            <li class="scroll-to-section"><a href="?controller=products&action=home">Điện thoại</a></li>
                            <li class="scroll-to-section"><a href="?controller=tablets&action=home">Máy Tính bảng</a></li>
                            <li class="scroll-to-section"><a href="?controller=laptop&action=home">LapTop</a></li>
                            <li class="scroll-to-section"><a href="?controller=pk&action=home">Phụ kiện</a></li>
                            <?php } ?>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Phụ Kiện</a>
                                <ul>
                                    <li><a href="about.html">Sạc dự phòng</a></li>
                                    <li><a href="products.html">Tai nghe</a></li>
                                    <li><a href="single-product.html">Cáp sạc</a></li>
                                    <li><a href="contact.html">Dây sạc</a></li>
                                    <li><a href="contact.html">Đồng hồ thông minh</a></li>
                                </ul>
                            </li> -->
                            <li class="scroll-to-section"><a href="?controller=cart&action=home">Giỏ hàng</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="main-banner" id="top">
        <?php require_once('routes.php'); ?>
    </div>
    <footer>
        <div class="container">
               
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Trường đại học Kĩ Thuật Công Nghệ Cần Thơ 
                        
                        <br>Nhóm Thực Hành Số: 9</a>
                    </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/customtoast.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    

  </body>
</html>


