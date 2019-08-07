<?php
include("connection.php");
      $sc = mysqli_real_escape_string($db,$_POST['search']);

$fname='';
$output='';
if(isset($_POST['search'])){
$query=$_POST['search'];
$query=preg_replace("#[^0-9a-z]#i","","$query");
$sql="SELECT * from tblproduct where name = '$sc'";
$squery= mysqli_query($db,$sql) or die ("Could not open search");
$count=mysqli_num_rows($squery);
if($count==0){
  echo "No Results!";
  }
else
{
 while($row=mysqli_fetch_array($squery)){
	/*$fname=$row['name'];
	$des=$row['code'];
	$pri=$row['price'];
	$pid=$row['id'];

	echo $fname.'<br/>';
	echo $des.'<br/>';
	echo $pri.'<br/>';
	echo $pid.'<br/>';*/?>
	<html>
	<body>
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
</body>
    </html>
<?php
 }
}
}


?>