<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[employeeid]=="")
	$employeeid="null";
else
	$employeeid="'$_POST[employeeid]'";

$username = mysql_real_escape_string("$_POST[username]");

$password1 = mysql_real_escape_string("$_POST[password1]");
$password2 = mysql_real_escape_string("$_POST[password2]");

if( $password1 !=  $password2)
	die('Passwords dont match. Try Re-registering');
if( $_POST[username] == "")
	die('Username Cant be blank');
if( $_POST[password1] == "")
	die('password Cant be blank');




$sql="INSERT INTO users (EmployeeID, username, password)
VALUES
($employeeid, '$username', '$password1')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
header("Location: login.php");
mysql_close($con);
?> 


