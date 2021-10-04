<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="./css/global.css"/>
<link rel="stylesheet" href="./css/index.css"/>
<link rel="stylesheet" href="./css/ur.css"/>
<style>
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.register {
width: 400px;
margin: 30px auto;
}
</style>

</head>
<body>

<?php
  $error = "";
  $uname = "";
  $pwd = "";
  if (isset($_GET['login'])) {
    $message = $_GET['login'];
    if ($message == "empty") {
      $error = "Please fill out the form";
    } else if ($message == "invalid") {
      $error = "Invalid username or password";
      $uname = $_GET['uname'];
      $pwd = $_GET['pwd'];
    }

    if (!empty($error)) {
      $error = "<p style='color: crimson;'>$error</p>";
    }
  }
?>

<header>
<h1>GYM</h1>
<div>
<a href="user_registration.php" > register</a>
 
</div>
</header>
 
<form class="register" action="http://localhost/gym/utils/login.php" method="get">
<br><br>
<lable> USER NAME</lable>
<input type="text" name="username" value="<?php echo $uname?>">
<br><br>
<lable> PASSWORD</lable>
<input type="text" name="password" value="<?php echo $pwd ?>">
<br><br>
<input type="checkbox" name="rememberme">
<lable> Remember Me</lable>
<br><br>
<input type="submit" name="submit" value="submit">
<br><br>
<?php echo $error ?>
<br><br>
<p>If U Don't have an account <a href="user_registration.php" > register here</a></p>
 
</form>
 
</body>
</html>
