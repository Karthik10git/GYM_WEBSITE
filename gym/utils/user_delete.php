<?php
include('conn.php');
$id= $_GET["memberid"];
//echo $id;
$q="delete from member where memberid = $id";
$result = $db->query($q);

echo "Member Deleted successfully, plz <button onclick='history.back()'>back</button>";
?>
