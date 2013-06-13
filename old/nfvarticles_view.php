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

$result = mysql_query("SELECT * FROM NFV_Articles");

echo "<table border='1'>
<tr>
<th>Date</th>
<th>Topic</th>
<th>Page Number</th>
<th>Category</th>
<th>Vendor Name</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Topic'] . "</td>";
  echo "<td>" . $row['Page_Number'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['Vendor_Name'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 




