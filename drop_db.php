<?php
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("DROP DATABASE postnoon",$con))
  {
  echo "Database dropped";
  }
else
  {
  echo "Error dropping database: " . mysql_error();
  }

mysql_close($con);
?> 

