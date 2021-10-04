<html>
<head>
<title>MEMBER_DETAILS</title>
<link rel="stylesheet" href="http://localhost/gym/css/global.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/style.css"/>
<link rel="stylesheet" href="http://localhost/gym/css/ur.css"/>
<style>
table {
margin: 20px auto;
}
</style>
</head>
<?php
include('./utils/conn.php');
session_start();
$result=$db->query("select * from member");
?>
<body>
<header>
<h1>GYM</h1>
 
</header>
<img src="http://localhost/gym/images/gym2.jpg" > 

<div>
<table>  
<tr>
<td><button onclick="history.back()">back</button></td>
</tr>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>E-Mail id</th>
<th>Member id</th>
<th>Trainer id</th>
<th></th>
</tr>
<?php
if ($result->num_rows==0){
echo "no members";
}else {
  while ($row=mysqli_fetch_array($result)){
		 $fname=$row ['fname'];
	    $lname=$row['lname'];
	    $email=$row['email'];
	    $memberid=$row['memberid'];
	    $trainerid=$row['trainerid'];
	      echo "<tr>
		  <td>$fname</td>
		<td>$lname</td>
		    <td>$email</td>
		    <td>$memberid</td>
		  <td>$trainerid</td>
		   <td>
		   <a href='./utils/user_delete.php?memberid=$memberid'> delete</a>
		   <a href='./member_update.php?memberid=$memberid'> update</a>
		   </td>
		   
		</tr>";
	    }
 
}
?>
</table>
</div>
<footer>
<p>copyright @ karthi</p>
</footer>
</body>
</html>
