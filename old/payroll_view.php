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

$result = mysql_query("SELECT * FROM Payroll");

echo "<table border='1'>
<tr>
<th>EmployeeID</th>
<th>Salary</th>
<th>Pay Cut</th>
<th>Month</th>
<th>PPF</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['EmployeeID'] . "</td>";
  echo "<td>" . $row['Salary'] . "</td>";
  echo "<td>" . $row['Pay_cut'] . "</td>";
  echo "<td>" . $row['Month'] . "</td>";
  echo "<td>" . $row['PPF'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 



