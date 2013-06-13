<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");

if (!$con)
{	
	die("Could not connect " . mysql.error());
}

mysql_select_db('postnoon',$con);

if($_POST[DName]=="")
	$DName="null";
else
	$DName="'$_POST[DName]'";

if($_POST[HOD_ID]=="")
	$HOD_ID="null";
else
	$HOD_ID="'$_POST[HOD_ID]'";


$sql="INSERT INTO Department (DName, HeadofDepartmentID)
VALUES
($DName,	$HOD_ID )";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
	header("Location: department_view.php");


mysql_close($con);
?>
