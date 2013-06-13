<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");

if (!$con)
{	
	die("Could not connect " . mysql.error());
}

mysql_select_db('postnoon',$con);


if($_POST[ProcessName]=="")
	$ProcessName="null";
else
	$ProcessName="'$_POST[ProcessName]'";

$date="'$_POST[Date]'";

$I_O="'$_POST[I_O]'";

if($_POST[Amount]=="")
	$Amount="null";
else
	$Amount="'$_POST[Amount]'";


if($_POST[DepartmentName]=="")
	$DepartmentName="null";
else
	$DepartmentName="'$_POST[DepartmentName]'";

$sql="INSERT INTO BalanceSheet (ProcessName,Date, I_O, Amount, DepartmentName)
VALUES
($ProcessName, $date ,$I_O,$Amount, $DepartmentName)";
if(!mysql_query($sql,$con)) 
{
 die(mysql.error());
}
else
{
	echo "1 query affected";
}
mysql_close($con);
header("Location: BalanceSheet_view.php");
?>
