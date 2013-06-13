<?php
$id = $_POST['EmployeeID'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Photographer where EmployeeID = $id";
mysql_query($query);
header("Location:photographer_view.php");
?>
