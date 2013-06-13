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

if($_POST[assign]=="")
	$assign="NULL";
else
	$assign="'$_POST[assign]'";


$sql="INSERT INTO Photographer (EmployeeID, Assignment)
VALUES
($empid, $assign)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: photographer_view.php");
mysql_close($con);
?> 


