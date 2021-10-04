<?php
include('conn.php');
session_start();
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$emailid = $_GET['email'];
$memberid = $_GET['memberid'];
$trainer = $_GET['trainer'];
//echo $fname." " .$lname." " .$emailid." " .$memberid." " .$trainer. " ";

$sql = "INSERT INTO member (fname, lname, email, memberid, trainerid) VALUES ('$fname', '$lname', '$emailid', '$memberid', '$trainer')";

$result = $db->query($sql);

echo "Member Created successfully, plz <button onclick='history.back()'>back</button>";
?>
