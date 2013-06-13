<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[reporterid]=="")
	$reporterid="null";
else
	$reporterid="'$_POST[reporterid]'";

if($_POST[photographerid]=="")
	$photographerid="NULL";
else
	$photographerid="'$_POST[photographerid]'";


$sql="INSERT INTO Clicks_For (ReporterID, PhotographerID)
VALUES
($reporterid, $photographerid)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: clicksfor_view.php");
mysql_close($con);
?> 


