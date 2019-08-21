<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["uid"])){
 // session_start();

}
else{

header('Location: ../index.html?'.$_SESSION["uid"]);

}
error_reporting(E_ERROR | E_PARSE);
session_start();
//require_once("dbcontroller.php");
include("dbcontroller.php");
$db_handle = new DBController();
   $mysqli = new mysqli("remotemysql.com", "yzPIJJhfyI", "PYxXR2mYdS", "yzPIJJhfyI",3306);

?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--meta name="generator" content="Mobirise v4.3.4, mobirise.com"-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/ibx-2-304x290.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>CART</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  
  
  
</head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<body>
<section class="menu cid-qyvZvAATCr" once="menu" id="menu1-j" data-rv-view="473">

    

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
        <div class="collapse navbar-collapse" id="navbarSupportedContent" align="justify-content-md-center">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="page1.html"><span class="mbri-play mbr-iconfont mbr-iconfont-btn"></span>
                        &nbsp;YOUTUBE &nbsp;&nbsp;</a></li><li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="page1.html" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>PRODUCT&nbsp;</a><div class="dropdown-menu"><a class="text-black dropdown-item display-4" href="page3.html"><span class="mbri-code mbr-iconfont mbr-iconfont-btn"></span>SOFTWARES</a><a class="text-black dropdown-item display-4" href="page2new.php"><span class="mbri-mobile mbr-iconfont mbr-iconfont-btn"></span>GADGETS</a><a class="text-black dropdown-item display-4" href="page1.html" aria-expanded="false"></a></div></li><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="cart.php"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                        &nbsp;CART</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="../index.html" aria-expanded="true"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>LOGOUT&nbsp;</a></li></ul>
            </div>
    </nav>
</section>

<section class="header1 cid-qyCWW0Mz6q mbr-parallax-background" id="header1-m" data-rv-view="200">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-2"></h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">YOUR CART</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5"></p>
                
            </div>
        </div>
    </div>

</section>




<section class="mbr-section article content9 cid-qyNO6jaYxV" id="content9-u" data-rv-view="481">
<div style="overflow-x:auto;">
<table cellpadding="10" cellspacing="1" class="w3-table-all w3-card-4">
<tbody>
<tr>
<th style="text-align: left;"><strong></strong></th>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:left;"><strong>Code</strong></th>
<th style="text-align:right;"><strong>Quantity</strong></th>
<th style="text-align:right;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr> 
<?php 
    
   $getit= $mysqli->query("SELECT product_id FROM cart_items WHERE user_id='{$_SESSION['uid']}'");

    //$getit = $db_handle->runQuery("SELECT product_id FROM cart_items WHERE user_id=4");
    $rset = array();
    while ($ro = mysqli_fetch_array($getit)) {
        $rset[] = $ro;
        //echo $rset;
    }   
$i=0;
    foreach ($rset as $it){
           //     echo $it;

        //$geti = $db_handle->runQuery("SELECT * FROM tblproduct WHERE product_id='$it'");
       // while($item = $geti->mysql_fetch_assoc()){
        $geti=$mysqli->query("SELECT * FROM tblproduct WHERE id='$it[$i]'");
        $product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE id='$it[$i]'");
    //$geti-> <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; </td>
    
    $r=0;
    
        while($item = mysqli_fetch_assoc($geti)){
    ?>
        <tr>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><div style="width:300px;height:auto"><img src="<?php echo $product_array [$i]["image"]; ?>" alt="" height="150"></div></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
        <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
        <?php
        $getqty=$mysqli->query("SELECT quantity FROM cart_items WHERE user_id='{$_SESSION['uid']}' AND product_id ='$it[$i]'");
        while($itm = mysqli_fetch_assoc($getqty)){
          ?>
          
          <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $itm["quantity"];  $a=$itm["quantity"];?></td>
        
        <?php
          
        }
        ?>
        <td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
        <td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="sample.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
        </tr>
        <?php
        
        
        $item_total += ($item["price"]*$a);
    }
    }
    $i++;
    ?>

<tr>
<td colspan="5" style="text-align: right"><strong>Total:</strong> <?php      
 echo "$".$item_total; ?></td>
 <td style="text-align: center"><a href="sample.php?action=empty">EMPTY CART</a></td>
</tr>
</tbody>
</table>
</div>
<div align="right" style="padding-right: 35px;padding-top: 20px;">
  <form action="checkout.php">
<input type="submit" name="" value="CHECKOUT" align="right" class="btn btn-md btn-secondary display-4"/>
</form>
</div>

   
</section>  

<section class="cid-qz2ur8vs0M mbr-reveal" id="footer1-2i" data-rv-view="489">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.com/">
                        <img src="assets/images/ibx-2-304x2900.png" alt="Mobirise" title="" media-simple="true">
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
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>