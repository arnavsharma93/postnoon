<?php
$id = $_POST['ProcessName'];
$id = "'$id'";
$id2 = $_POST['Date'];
$id2 = "'$id2'";
mysql_connect("localhost","root","iiit123");
mysql_select_db("postnoon");
$query = "DELETE from BalanceSheet where ProcessName = $id AND Date = $id2";
mysql_query($query);
header("Location:BalanceSheet_view.php");
?>
