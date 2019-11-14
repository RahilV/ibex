<?php
error_reporting(E_ERROR | E_PARSE);
//session_start();
//require_once("dbcontroller.php");
session_start();
if(isset($_SESSION["uid"])){
 // session_start();
  
}
else{

header('Location: ../index.html?'.$_SESSION["uid"]);

}

include("dbcontroller.php");
$db_handle = new DBController();
 $mysqli = new mysqli("remotemysql.com", "tdx5S5jGSq", "AsGhBIKNG8", "tdx5S5jGSq",3306);
$ui=$_SESSION["uid"];

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		/*if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			if(!empty($_SESSION["cart_item"]a)) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} 	else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}*/
		//$getpi=$mysqli->query("SELECT quantity FROM cart_items WHERE user_id=4 AND product_id ='$it[$i]'");
		
		//$pib=$productBy[0]["id"];
//if($_SESSION['ref']!=$pib){
		//if(!empty($_POST["quantity"])) {
           // $cd=3;
    
         
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$pi=$productByCode[0]["id"];
			//$_SESSION['ref']=$pi;
		//	$ui=4;
        $ui=$_SESSION["uid"];
			$qt=$_POST["quantity"];
			$_SESSION['ref']=$pi;
           $cd=$mysqli->query("SELECT quantity FROM cart_items WHERE product_id='$pi' and user_id='$ui'" );
            $ro = mysqli_fetch_assoc($cd);
        $ad=$ro['quantity']+$qt;
        if($ro['quantity']<=0){
			$mysqli->query("INSERT INTO cart_items (id,product_id, user_id, quantity) VALUES('0','$pi', '$ui', '$qt')");
        }
        else{
        $db_handle->runQuery("Update cart_items set quantity='$ad' WHERE product_id='$pi'");
        }
        
    //    while ($rowp = $cd->fetch_assoc()) {
      //      echo $rowp['quantity']."<br>";
        //}
        echo $_SESSION["uid"];
		header('Location: page2new.php');

		
		
	break;
	case "remove":
		/*if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}*/
		$productBy = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			echo $_GET["code"];

		$pib=$productBy[0]["id"];
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$pi=$productByCode[0]["id"];

			echo $pi;
			//$_SESSION['ref']=$pi;
			$db_handle->runQuery("DELETE FROM cart_items WHERE product_id='$pi'");
		

	header('Location: cart.php');
	break;
	case "empty":
			$db_handle->runQuery("DELETE FROM cart_items");
header('Location: cart.php');
	echo $_GET["code"];
	
	break;	

	default: header('Location: cart.php');
}
}
header('Location: cart.php');
?>
