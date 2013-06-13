<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[categoryname]=="")
	$categoryname="NULL";
else
	$categoryname="'$_POST[categoryname]'";

if($_POST[assistantid]=="")
	$assistantid="NULL";
else
	$assistantid="'$_POST[assistantid]'";


if($_POST[subeditorid]=="")
	$subeditorid="NULL";
else
	$subeditorid="'$_POST[subeditorid]'";

if($_POST[handeledbydept]=="")
	$handeledbydept="NULL";
else
	$handeledbydept="'$_POST[handeledbydept]'";

$sql="INSERT INTO NEWS_Section (Category_Name, Assistant_Editor_ID, Sub_Editor_ID, Handled_By )
VALUES
($categoryname, $assistantid, $subeditorid, $handeledbydept)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: newssection_view.php");
mysql_close($con);
?> 


