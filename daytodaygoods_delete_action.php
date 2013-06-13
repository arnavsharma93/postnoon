<?php
$id = $_POST['Type'];
$id = "'$id'";
$id2 = $_POST['Date'];
$id2 = "'$id2'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from D2D_Goods where Type = $id AND Date = $id2";
mysql_query($query);
header("Location:daytodaygoods_view.php");
?>
