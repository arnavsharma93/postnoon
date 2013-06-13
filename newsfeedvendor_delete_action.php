<?php
$id = $_POST['Name'];
$id = "'$id'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from NFV where Name = $id";
mysql_query($query);
header("Location:newsfeedvendor_view.php");
?>
