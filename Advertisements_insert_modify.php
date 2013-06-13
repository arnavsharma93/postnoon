<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[Invoice_No]=="")
	$Invoice_No="null";
else
	$Invoice_No="'$_POST[Invoice_No]'";

if($_POST[Cost]=="")
	$Cost="null";
else
	$Cost="'$_POST[Cost]'";

if($_POST[Product]=="")
	$Product="null";
else
	$Product="'$_POST[Product]'";


if($_POST[Number_of_Ads]=="")
	$Number_of_Ads="null";
else
	$Number_of_Ads="'$_POST[Number_of_Ads]'";

if($_POST[clientname]=="")
	$clientname="null";
else
	$clientname="'$_POST[clientname]'";

if($_POST[Handeled_By]=="")
	$Handeled_By="null";
else
	$Handeled_By="'$_POST[Handeled_By]'";

$Printing_Date="'$_POST[Printing_Date]'";


$sql="INSERT INTO Advertisements (Invoice_No,Cost, Product, Printing_Date, Number_of_Ads , Handeled_By, Client_Name)
VALUES
($Invoice_No, $Cost ,$Product,$Printing_Date, $Number_of_Ads, $Handeled_By, $clientname)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
header("Location: Advertisements_view.php");


mysql_close($con);
?> 

