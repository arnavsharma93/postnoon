<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);



$uname= "'$_POST[user]'";
$result= mysql_query("UPDATE users SET isadmin=1 where username=$uname");

header("Location: users.php");
?>
