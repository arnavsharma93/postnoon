<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[empid]=="")
	$empid="NULL";
else
	$empid="'$_POST[empid]'";

if($_POST[salary]=="")
	$salary="NULL";
else
	$salary="'$_POST[salary]'";

$paycut = "'$_POST[paycut]'";

$month = "'$_POST[month]'";

if($_POST[ppf]=="")
	$ppf="NULL";
else
	$ppf="'$_POST[ppf]'";
$del = "DELETE FROM Payroll where EmployeeID =$empid";
mysql_query($del,$con);

$sql="INSERT INTO Payroll (EmployeeID, Salary, Pay_cut, PPF, Month )
VALUES
($empid, $salary, $paycut, $ppf, $month)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

header("Location: payroll_view.php");
mysql_close($con);
?> 

