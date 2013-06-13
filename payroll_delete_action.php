<?php
$id = $_POST['EmployeeID'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Payroll where EmployeeID = $id";
mysql_query($query);
header("Location:payroll_view.php");
?>
