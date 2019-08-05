<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
//require_once("dbcontroller.php");
include("dbcontroller.php");
$db_handle = new DBController();
 $mysqli = new mysqli("localhost", "root", "", "ibexcart");
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
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}*/
		//$getpi=$mysqli->query("SELECT quantity FROM cart_items WHERE user_id=4 AND product_id ='$it[$i]'");
		
		$productBy = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
		$pib=$productBy[0]["id"];
if($_SESSION['ref']!=$pib){
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$pi=$productByCode[0]["id"];
			//$_SESSION['ref']=$pi;
			$ui=4;
			$qt=$_POST["quantity"];
			$_SESSION['ref']=$pi;
			$db_handle->runQuery("INSERT INTO cart_items (id,product_id, user_id, quantity) VALUES(0,'$pi', '$ui', '$qt')");
			
		}
}
		
		
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
		$db_handle->runQuery("DELETE * FROM cart_items WHERE product_id='$pi'");
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
