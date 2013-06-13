<?php
$id = $_POST['ReporterID'];
$id2 = $_POST['PhotographerID'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Clicks_For where ReporterID = $id AND PhotographerID = $id2";
mysql_query($query);
header("Location:clicksfor_view.php");
?>
