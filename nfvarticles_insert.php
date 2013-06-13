<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);

$date="'$_POST[date]'";

if($_POST[topic]=="")
	$topic="null";
else
	$topic="'$_POST[topic]'";

if($_POST[pageno]=="")
	$pageno="NULL";
else
	$pageno="'$_POST[pageno]'";

if($_POST[category]=="")
	$category="NULL";
else
	$category="'$_POST[category]'";

if($_POST[vendor]=="")
	$vendor="NULL";
else
	$vendor="'$_POST[vendor]'";


$sql="INSERT INTO NFV_Articles (Date, Topic, Page_Number, Category, Vendor_Name)
VALUES
($date, $topic, $pageno, $category, $vendor)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
header("Location: nfvarticles_view.php");
mysql_close($con);
?> 


