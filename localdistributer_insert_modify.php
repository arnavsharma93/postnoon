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

if($_POST[area]=="")
	$area="NULL";
else
	$area="'$_POST[area]'";

if($_POST[papersold]=="")
	$papersold="NULL";
else
	$papersold="'$_POST[papersold]'";

if($_POST[money]=="")
	$money="NULL";
else
	$money="'$_POST[money]'";

$date="'$_POST[date]'";


$sql="INSERT INTO Local_Distributor (Name,Date, Paper_Sold, Money, Area_Name)
VALUES
($name, $date, $papersold, $money, $area)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: localdistributer_view.php");
mysql_close($con);
?> 


