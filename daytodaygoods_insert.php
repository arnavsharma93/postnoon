<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[type]=="")
	$type="null";
else
	$type="'$_POST[type]'";

if($_POST[cost]=="")
	$cost="NULL";
else
	$cost="'$_POST[cost]'";

if($_POST[boughtby]=="")
	$boughtby="NULL";
else
	$boughtby="'$_POST[boughtby]'";

$date="'$_POST[date]'";

$sql="INSERT INTO D2D_Goods (Type, Date, Cost, Bought_By)
VALUES
($type, $date, $cost, $boughtby)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: daytodaygoods_view.php");
mysql_close($con);
?> 


