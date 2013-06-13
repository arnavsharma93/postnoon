<?php
$id = $_POST['Name'];
$id = "'$id'";
$id2 = $_POST['EmployeeID'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Dependents where EmployeeID = $id2 and Name = $id";
mysql_query($query);
header("Location:dependents_view.php");
?>
