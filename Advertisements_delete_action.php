<?php
$id = $_POST['Invoice_No'];
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from Advertisements where Invoice_No = $id";
mysql_query($query);
header("Location:Advertisements_view.php");
?>
