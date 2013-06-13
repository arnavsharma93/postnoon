<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[employeeid]=="")
	$empid="NULL";
else
	$empid="'$_POST[employeeid]'";

if($_POST[name]=="")
	$name="NULL";
else
	$name="'$_POST[name]'";

$sex = "'$_POST[sex]'";

if($_POST[age]=="")
	$age="NULL";
else
	$age="'$_POST[age]'";

$sql="INSERT INTO Dependents (EmployeeID, Name, Sex, Age )
VALUES
($empid, $name, $sex, $age)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: dependents_view.php");
mysql_close($con);
?> 


