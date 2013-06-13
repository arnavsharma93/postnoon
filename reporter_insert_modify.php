<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[empid]=="")
	$empid="null";
else
	$empid="'$_POST[empid]'";

if($_POST[submitted]=="")
	$sub="NULL";
else
	$sub="'$_POST[submitted]'";

if($_POST[published]=="")
	$pub="NULL";
else
	$pub="'$_POST[published]'";

if($_POST[category]=="")
	$cat="NULL";
else
	$cat="'$_POST[category]'";

$sql="INSERT INTO Reporter (EmployeeID, Total_Articles, Total_Published, Category)
VALUES
($empid, $sub, $pub, $cat)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: reporter_view.php");
mysql_close($con);
?> 


