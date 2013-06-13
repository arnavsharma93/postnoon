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

$date="'$_POST[date]'";

if($_POST[cost]=="")
	$cost="NULL";
else
	$cost="'$_POST[cost]'";




$sql="INSERT INTO NFV (Name, Contract_Date, Contract_Cost)
VALUES
($name, $date, $cost)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: newsfeedvendor_view.php");
mysql_close($con);
?> 


