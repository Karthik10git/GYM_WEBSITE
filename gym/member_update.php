<html>
<head>
<title>MEMBER_UPDATE</title>
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
$memberid = $_GET['memberid'];
$result = $db->query("select * from member where memberid = '$memberid'");
if ($result->num_rows == 0) {
  echo "Invalid memberid";
  die();
}
$row=mysqli_fetch_array($result);

?>



<form class="register">
 <h2>UPDATE_USER</h2>
<br><br>
<lable> FIRST NAME</lable>
<input type="text" name="fname" value="<?php echo $row['fname'] ?>" required>
<br><br>
<lable> LAST NAME</lable>
<input type="text" name="lname" value="<?php echo $row['lname'] ?>"  required>
<br><br>
<lable> E-main ID</lable>
<input type="text" name="email" value="<?php echo $row['email'] ?>"  required>
<br><br>
<lable> MEMBER ID</lable>
<input type="text" name="memberid" value="<?php echo $row['memberid'] ?>"  required>
<br><br>
<lable> TRAINER</lable>
<input type="text" name="trainer" value="<?php echo $row['trainerid'] ?>"  required>
<br><br>
<input type="submit" name="update" value="update">
<br><br>
 
</form>


<?php 

if (isset($_GET['update'])) {
  session_start();
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$emailid = $_GET['email'];
$memberid = $_GET['memberid'];
$trainer = $_GET['trainer'];

$sql = "update member
set 
fname = '$fname',
lname = '$lname',
email = '$emailid',
memberid = '$memberid',
trainerid = '$trainer'";

$result = $db->query($sql);

echo "
<script>
alert('Updated successfully');
history.back();
</script>";
}

?>


<body>
</body>


