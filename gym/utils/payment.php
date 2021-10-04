<?php
include('conn.php');
session_start();
$paymentid = $_GET['paymentid'];
$amount = $_GET['amount'];
$customerid = $_GET['customerid'];
$paymenttype = $_GET['paymenttype'];
 
//echo $paymentid." " .$amount." " .$customerid." " .$paymenttype." ";

$sql = "INSERT INTO Payment (Payment_id, Amount, customer_id, payment_type) VALUES ($paymentid, $amount, $customerid, '$paymenttype')";

$result = $db->query($sql);

echo "Payment success, plz <button onclick='history.back()'>back</button>";
?>
