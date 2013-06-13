<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[name]=="")
	$name="null";
else
	$name="'$_POST[name]'";

if($_POST[type]=="")
	$type="NULL";
else
	$type="'$_POST[type]'";

if($_POST[managerid]=="")
	$manager="NULL";
else
	$manager="'$_POST[managerid]'";

$sql="INSERT INTO Ad_Clients (Name, Type, Manager)
VALUES
($name, $type, $manager)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: adclients_view.php");
mysql_close($con);
?> 


