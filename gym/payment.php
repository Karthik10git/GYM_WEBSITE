<html>
<head>
<title>PAYMENT_DETAILS</title>
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
$sql="SELECT * FROM member INNER JOIN Payment on memberid = customer_id;";
$result=$db->query($sql);
?>
<header>
<h1>GYM</h1>
 
</header>
<img src="http://localhost/gym/images/gym4.jpg" > 
<div>
<table>
<tr>
<td><button onclick="history.back()">back</button></td>
</tr>
<tr>
<th>Payment ID</th>
<th>Amount</th>
<th>Payment Type</th>
<th>Customer ID</th>
<th>Customer Name</th>
</tr>
 <?php
if ($result->num_rows==0){
echo "no payments";
}else {
  while ($row=mysqli_fetch_array($result)){
		 	$Payment_id=$row ['Payment_id'];
		$Amount=$row['Amount'];
		$payment_type=$row['payment_type'];
		$customer_id=$row['customer_id'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		
		echo"<tr>
		<td>$Payment_id</td>
		<td>$Amount</td>
		<td>$payment_type</td>
		<td>$customer_id</td>
		<td>$fname $lname</td>
		    </tr>";
	    }
 
}
?>
 
</table>
</div>
<form class="register" action="http://localhost/gym/utils/payment.php" method="get">
 <h2>MAKE NEW PAYMENT</h2>
<br><br>
<lable> Payment ID</lable>
<input type="text" name="paymentid" required>
<br><br>
<lable> Amount</lable>
<input type="text" name="amount" required>
<br><br>
<lable> Customer ID</lable>
<input type="text" name="customerid" required>
<br><br>
<lable> Payment Type</lable>
<input type="text" name="paymenttype" required>
<br><br>
<input type="submit" name="pay" value="PAY">
<br><br>
 
</form>
<footer>
<p>copyright @ karthi</p>
</footer>
</body>
</html>
