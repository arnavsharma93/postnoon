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
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);

$result = mysql_query("SELECT * FROM Ad_Clients");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Type</th>
<th>Manager ID</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Type'] . "</td>";
  echo "<td>" . $row['Manager'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 




