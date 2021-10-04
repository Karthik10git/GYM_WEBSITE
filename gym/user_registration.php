<?php
include("./utils/conn.php")

?>

<html>
<head>
<title>REGISTER</title>
<link rel="stylesheet" href="http://localhost/gym/css/global.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/style.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/ur.css"/>


</head>
<body>
<header>
<h1>GYM</h1>
<div>
<a href="login.php" > login</a>
 
</div>
</header>
 
<form class="register" action="http://localhost/gym/utils/register.php" method="get">
<br><br>
<lable> USER NAME</lable>
<input type="text" name="username">
<br><br>
<lable> PASSWORD</lable>
<input type="text" name="password">
<br><br>
<input type="submit" name="submit" value="submit">
<br><br>
<p>Already have an account <a href="login.php" > login</a></p>
 
</form>
 
</body>
</html>
