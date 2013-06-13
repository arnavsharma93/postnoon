<?php
$id = $_POST['Date'];
$id = "'$id'";
$id2 = $_POST['Topic'];
$id2 = "'$id2'";
$id3 = $_POST['Page_Number'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from NFV_Articles where Date = $id AND Topic = $id2 AND Page_Number = $id3";
mysql_query($query);
header("Location:nfvarticles_view.php");
?>
