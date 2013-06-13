<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);



$uname= "'$_POST[user2]'";
$result= mysql_query("UPDATE users SET isadmin=0 where username=$uname");

header("Location: users.php");
?>
