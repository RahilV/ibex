<!DOCTYPE html>
<?php
session_start();
  include("dbcontroller.php");
  $db_handle = new DBController();
  $mysqli = new mysqli("localhost", "root", "", "ibexcart");
if(isset($_SESSION["uid"])){
 // session_start();
}
else{
header('Location: ../index.html'.$_SESSION["uid"]);


}
?>
<html>
<head>
	<title>Digi Pay</title>
</head>
<body>
<?php
	$amt=$_GET["total"];
?>
<form action="https://digipaym.000webhostapp.com/LoginPage.php" method="POST">

<!-- Amount: -->
<input type="hidden" value="<?php echo "$amt"?>" name="amount"> <br>

<!-- Merchant Username: -->
<input type="hidden" name="merchant" value="hillstiudios.service@gmail.com"> <br>

<!-- Merchant AccNo: -->
<input type="hidden" name="acc_no" value="3728019701281935"> <br>

<input type="submit" value="Submit">

</form>

</body>
</html>