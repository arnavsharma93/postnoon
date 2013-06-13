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

if($_POST[handeledby]=="")
	$handeledby="NULL";
else
	$handeledby="'$_POST[handeledby]'";

if($_POST[executiveid]=="")
	$executiveid="NULL";
else
	$executiveid="'$_POST[executiveid]'";

$sql="INSERT INTO Circulation_Area (Name, ExecutiveID, Handled_By)
VALUES
($name, $executiveid, $handeledby)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: circulationarea_view.php");
mysql_close($con);
?> 


