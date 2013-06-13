<?php
$id = $_POST['DName'];
$id = "'$id'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Department where DName = $id";
mysql_query($query);
header("Location:department_view.php");
?>
