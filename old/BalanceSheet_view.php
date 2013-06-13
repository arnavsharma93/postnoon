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

$result = mysql_query("SELECT * FROM BalanceSheet");

echo "<table border = '1'>
<tr>
<th> ProcessName </th>
<th> Date </th>
<th> I/O </th>
<th> Amount </th>
<th> Department Name </th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['ProcessName'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['I_O'] . "</td>";
	echo "<td>" . $row['Amount'] . "</td>";
	echo "<td>" . $row['DepartmentName'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>


