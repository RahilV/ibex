<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if(isset($_SESSION["uid"])){
 // session_start();
}
else{
header('Location: ../index.html'.$_SESSION["uid"]);


}
  include("dbcontroller.php");
  $db_handle = new DBController();
    $mysqli = new mysqli("remotemysql.com", "tdx5S5jGSq", "AsGhBIKNG8", "tdx5S5jGSq",3306);
   $db = new mysqli("remotemysql.com", "yzPIJJhfyI", "PYxXR2mYdS", "yzPIJJhfyI",3306);
   $sc = mysqli_real_escape_string($db,$_POST['search']);
   if(!isset($_SESSION)){
	header('Location: ../index.html');
}
?>
  <!-- Site made with Mobirise Website Builder v4.3.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/ibx-2-304x290.png" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">
  <title>Store</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
 <style> 
#search {
  color: white;

  float: right;
    width: 130px;
    box-sizing: none;
    outline-style: none;
    border: none;
    border-radius: 24px;
    font-size: 16px;
    background: rgba(2, 2, 2, 0.60);
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ;
    transition: width 0.4s ;
}

#search:focus {
    width: 200%;
}
::placeholder{
  color: white;
} 
</style> 
  
</head>
<body>
<section class="menu cid-qyvZvAATCr" once="menu" id="menu1-z" data-rv-view="143">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                         <img src="assets/images/ibx-2-304x290.png" alt="IBEX" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form action="search2.php" method="POST">
            <input type="text" name="search" placeholder="Search.." id="search"/>
          </form>
            
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                   <li class="nav-item"><a class="nav-link link text-black display-4" href="page1.html"><span class="mbri-play mbr-iconfont mbr-iconfont-btn"></span>
                        &nbsp;YOUTUBE &nbsp;&nbsp;</a></li><li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="page1.html" style="outline-style:none; " data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>PRODUCT&nbsp;</a><div class="dropdown-menu"><a class="text-black dropdown-item display-4" href="page3.html"><span class="mbri-code mbr-iconfont mbr-iconfont-btn"></span>SOFTWARES</a><a class="text-black dropdown-item display-4" href="page10.html"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn"></span>LIFESTYLE</a><a class="text-black dropdown-item display-4" href="page2new.php"><span class="mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>GADGETS</a><a class="text-black dropdown-item display-4" href="page1.html" aria-expanded="false"></a></div></li><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="cart.php"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                        &nbsp;CART</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="page1.html" aria-expanded="true"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>LOGOUT&nbsp;</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="page3.html">&nbsp;</a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/h">how to make your own website for free</a></section><section class="header1 cid-qySY4JagbH mbr-parallax-background" id="header1-13" data-rv-view="145">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">TECH STORE</h1>
                
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">High Quality Tech &amp; Lifestyle Products</p>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-gallery mbr-slider-carousel cid-qzySAWjinI" id="gallery3-2t" data-rv-view="148">

    

    <div>
        <div href="index.php"><!-- Filter --><!-- Gallery -->
    <div class="mbr-gallery-row">
    <div class="mbr-gallery-layout-default">
    <div>
    <div class="row">
    
<?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where upper(name) like '%$sc%'");
if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  
  ?>
  
    <div class="col-lg-4" style="padding-top: 10px">
      <div class="mbr-gallery-item mbr-gallery-item--pNaN" data-video-url="false" data-tags="Animated">
        <div href="#lb-gallery3-2t" data-slide-to="3" data-toggle="modal" align="center">
          <img src="<?php echo $product_array[$key]["image"]; ?>" alt="" height="300">
          <div align="center"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
          <div class="product-price" align="align-center"><?php echo "₹".$product_array[$key]["price"]; ?></div>
          <form method="post" action="sample.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
            <strong>Quantity:</strong><input type="text" name="quantity" value="  1" size="2" align="center" />
          <div class="mbr-section-btn" align="center">
            <input type="submit" value="ADD TO CART" class="btn btn-md btn-secondary display-4" />            </div></form>
          <span class="icon-focus"></span>
        </div>
      </div>
    </div>
  
<?php
  
}
}
?>            
      </div>
    </div>
    <div class="clearfix">
    </div>
    </div>
    </div><Lightbox -->
    </div>
    </div>

</section>

<section class="cid-qz2uuVEcm8 mbr-reveal" id="footer1-2j" data-rv-view="183">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.com/">
                        <img src="assets/images/ibx-2-304x2900.png" alt="Ibex" title="" media-simple="true">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Location</h5>
                <p class="mbr-text">Mumbai, India</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: hillstudio.services@gmail.com&nbsp;</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a class="text-primary" href="http://youtube.com/c/ibextech">Youtube Channel</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 Ibex - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://youtube.com/c/ibextech" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/ibexsocial/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/ibex.social" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" media-simple="true"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>