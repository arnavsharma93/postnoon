<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 0) {
    header("Location:login.php");
    die();
    }
?>
<input type=button onClick="location.href='logout.php'" value='Logout' style='float: right;'>
<?php
$con = mysql_connect("localhost","root","iiit123");
if(!$con)
{
	die('Could not connect ' . mysql.error() );
}
mysql_select_db('postnoon',$con);

$result = mysql_query("SELECT * FROM Advertisements");

echo "
	
	<table border = '1'>
<tr>
<th> Invoice Number </th>
<th> Cost </th>
<th> Product </th>
<th> Printing Date </th>
<th> Number of Ads </th>
<th> Handeled By </th>
<th> Client Name </th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['Invoice_No'] . "</td>";
	echo "<td>" . $row['Cost'] . "</td>";
	echo "<td>" . $row['Product'] . "</td>";
	echo "<td>" . $row['Printing_Date'] . "</td>";
	echo "<td>" . $row['Number_of_Ads'] . "</td>";
	echo "<td>" . $row['Handeled_By'] . "</td>";
	echo "<td>" . $row['Client_Name'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>


