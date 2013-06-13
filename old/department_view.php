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

$result = mysql_query("SELECT * FROM Department");

echo "<table border = '1'>
<tr>
<th> Name of Department </th>
<th> HOD_ID </th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['DName'] . "</td>";
	echo "<td>" . $row['HeadofDepartmentID'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>


