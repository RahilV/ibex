<?php
   include("connection.php");
   session_start();
   $mysqli = new mysqli("remotemysql.com", "tdx5S5jGSq", "AsGhBIKNG8", "tdx5S5jGSq",3306);
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['suname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['spwd']);
	  $myemail = mysqli_real_escape_string($db,$_POST['semail']);
	  $add = mysqli_real_escape_string($db,$_POST['addr']);
	  
	  $sql = "SELECT name FROM users WHERE name = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	  echo $count;
	  if(count==0){
		  $sql2 = "INSERT INTO users(name,email,password,address) VALUES('$myusername','$myemail','$mypassword','$add')";
		  mysqli_query($db,$sql2);
           $cc=$mysqli->query("SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'");
          $rot = mysqli_fetch_assoc($cc);
          $ids=$rot['id'];
         $_SESSION["uid"] = $ids;
		  header("location: index.html");

	  }
	  else{
		    $sql2 = "INSERT INTO users(id,name,email,password,address) VALUES(2,'$myusername','$myemail','$mypassword','$add')";
		  mysqli_query($db,$sql2);
		  header("location: index.html");
	  }
	  
	  
  }  
	  
?>
