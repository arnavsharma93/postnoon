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

$result = mysql_query("SELECT * FROM Employee");

echo "<table border='1'>
<tr>
<th>EmployeeID</th>
<th>First name</th>
<th>Middle name</th>
<th>Last name</th>
<th>Department name</th>
<th>Sex</th>
<th>Blood Group</th>
<th>Email</th>
<th>Phone No</th>
<th>Working Hours</th>
<th>Date Of Birth</th>
<th>Date Of Joining</th>
<th>Level Of Employment</th>
<th>Living Status</th>
<th>Date Of Resignation</th>
<th>Probation Period</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['EmployeeID'] . "</td>";
  echo "<td>" . $row['FName'] . "</td>";
  echo "<td>" . $row['MName'] . "</td>";
  echo "<td>" . $row['LName'] . "</td>";
  echo "<td>" . $row['Department_Name'] . "</td>";
  echo "<td>" . $row['Sex'] . "</td>";
  echo "<td>" . $row['BloodGroup'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['PhoneNo'] . "</td>";
  echo "<td>" . $row['WorkingHours'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";
  echo "<td>" . $row['JoiningDate'] . "</td>";
  echo "<td>" . $row['LevelofEmployment'] . "</td>";
  echo "<td>" . $row['LivingStatus'] . "</td>";
  echo "<td>" . $row['ResigningDate'] . "</td>";
  echo "<td>" . $row['ProbationPeriod'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 


