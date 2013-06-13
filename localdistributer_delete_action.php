<?php
$id = $_POST['Name'];
$id = "'$id'";
$id2 = $_POST['Area_Name'];
$id2 = "'$id2'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Local_Distributor where Name = $id AND Area_Name=$id2";
mysql_query($query);
header("Location:localdistributer_view.php");
?>
