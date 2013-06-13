<?php
$id = $_POST['Category_Name'];
$id = "'$id'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from NEWS_Section where Category_Name = $id";
mysql_query($query);
header("Location:newssection_view.php");
?>
