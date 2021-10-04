<?php
session_start();
?>
<html>
<head>
<title>DASHBOARD</title>
<link rel="stylesheet" href="http://localhost/gym/css/global.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/style.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/ur.css"/>
</head>
<body>
<header>
<h1>GYM</h1>
<div>
<a href="http://localhost/gym/member_details.php" > member details</a>
<a href="http://localhost/gym/package.php" > package</a>
<a href="http://localhost/gym/payment.php" > payment details</a>
<a href="http://localhost/gym/trainers.php" > trainer details</a>
</div>
<?php
if( isset($_SESSION['u_name'])){
echo ($_SESSION['u_name']);
}else {
  header("Location: http://localhost/gym/login.php");
}

?>
</header>
<img src="http://localhost/gym/images/gym1.jpg" > 
<div>

 <form class="register" action="http://localhost/gym/utils/regmember.php" method="get">
 <h2>MEMBER REGISTRATION</h2>
<br><br>
<lable> FIRST NAME</lable>
<input type="text" name="fname" required>
<br><br>
<lable> LAST NAME</lable>
<input type="text" name="lname" required>
<br><br>
<lable> E-main ID</lable>
<input type="text" name="email" required>
<br><br>
<lable> MEMBER ID</lable>
<input type="text" name="memberid" required>
<br><br>
<lable> TRAINER</lable>
<input type="text" name="trainer" required>
<br><br>
<input type="submit" name="register" value="register">
<br><br>
 
</form>
</div>
<footer>
<form action="http://localhost/gym/utils/logout.php" method="get">
<button type="submit" name= "submit">LogOut</button>
</form>

<p>copyright @ karthi</p>
</footer>
</body>
</html>
