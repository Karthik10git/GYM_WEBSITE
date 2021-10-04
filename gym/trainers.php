<html>
<head>
<title>TRAINER_DETAILS</title>
<link rel="stylesheet" href="http://localhost/gym/css/global.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/style.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/ur.css"/>
 
<style>
table {
margin: 20px auto;
}
</style>
</head>
<body>
<?php
include('./utils/conn.php');
session_start();
$result=$db->query("select * from Trainer");
?>
<header>
<h1>GYM</h1>
 
</header>
<img src="http://localhost/gym/images/gym3.jpg" > 
<div>
<table>
<tr>
<td><button onclick="history.back()">back</button></td>
</tr>
<tr>
<th>Trainer ID</th>
<th>Name</th>
<th>Mobile No...</th>
</tr>
 <?php
 if ($result->num_rows==0){
echo "no trainers";
}else {
 while($row=mysqli_fetch_array($result)){
		$trainerid=$row ['trainerid'];
		$name=$row['name'];
		$mobileno=$row['mobileno'];
		echo"<tr>
		<td>$trainerid</td>
		<td>$name</td>
		    <td>$mobileno</td>
		    
		</tr>";

	    }
	}
	?>
</table>
<br>
<form class="register" action="http://localhost/gym/utils/regtrainer.php" method="get">
<br><br>
<lable> TRAINER ID</lable>
<input type="text" name="trainerid">
<br><br>
<lable> NAME</lable>
<input type="text" name="name">
<br><br>
<lable> MOBILE NO</lable>
<input type="text" name="mobileno">
<br><br>
<input type="submit" name="register" value="register">
<br><br>
 
 
</form>
</div>
<footer>
<p>copyright @ karthi</p>
</footer>
</body>
</html>
