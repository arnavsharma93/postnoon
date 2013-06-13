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

$result = mysql_query("SELECT * FROM Clicks_For");

echo "<table border='1'>
<tr>
<th>Reporter ID</th>
<th>Photographer ID</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ReporterID'] . "</td>";
  echo "<td>" . $row['PhotographerID'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 




