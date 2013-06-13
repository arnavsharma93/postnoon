<?php
$id = $_POST['id'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Employee where EmployeeID = $id";
mysql_query($query);
header("Location:employee_view.php");
?>
