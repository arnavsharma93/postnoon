<?php
$id = $_POST['Name'];
$id = "'$id'";
$id2 = $_POST['Date'];
$id2 = "'$id2'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Paper_Vendor where Name = $id AND Date = $id2";
mysql_query($query);
header("Location:papervendor_view.php");
?>
