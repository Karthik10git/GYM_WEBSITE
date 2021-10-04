<?php
include('conn.php');
session_start();
$uname = $_GET['username'];
$pass = $_GET['password'];

if (empty(trim($uname))) {
  header("location: /gym/login.php?login=empty");
  die();
}
if (empty(trim($pass))) {
  header("location: /gym/login.php?login=empty");
  die();
}
   $sql = "SELECT * FROM logintb WHERE username='$uname' AND password='$pass'";
     $result = $db->query($sql);
   if($result->num_rows < 1) {
	header("location: /gym/login.php?login=invalid&uname=$uname&pwd=$pass");
       die();   
   } else {  
         if (isset($_GET["rememberme"])) {
          setcookie('username', $uname, 
          (time() + 2 * 24 * 60 * 60), "/gym");
        
          setcookie('password', $pass, 
          (time() + 2 * 24 * 60 * 60), "/gym");
          //echo "setting cookies";
        }

			  //log in the user here
			  $_SESSION['u_name'] = $uname;
			  header("Location: ../dashboard.php");
	   }
	   
?>
