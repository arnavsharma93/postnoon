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

$result = mysql_query("SELECT * FROM NEWS_Section");

echo "<table border='1'>
<tr>
<th>Category Name</th>
<th>Assistant Editor ID</th>
<th>Sub Editor ID</th>
<th>Handled By Department</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Category_Name'] . "</td>";
  echo "<td>" . $row['Assistant_Editor_ID'] . "</td>";
  echo "<td>" . $row['Sub_Editor_ID'] . "</td>";
  echo "<td>" . $row['Handled_By'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 




