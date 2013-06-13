<?php
ob_start();
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("postnoon", $con);


if($_POST[firstname]=="")
	$Fname="null";
else
	$Fname="'$_POST[firstname]'";

if($_POST[middlename]=="")
	$Mname="null";
else
	$Mname="'$_POST[middlename]'";

if($_POST[lastname]=="")
	$Lname="null";
else
	$Lname="'$_POST[lastname]'";


if($_POST[employeeid]=="")
	$empid="null";
else
	$empid="'$_POST[employeeid]'";

if($_POST[deptname]=="")
	$dept="null";
else
	$dept="'$_POST[deptname]'";


if($_POST[workinghours]=="")
	$Whours="null";
else
	$Whours="'$_POST[workinghours]'";

if($_POST[email]=="")
	$email="null";
else
	$email="'$_POST[email]'";

if($_POST[phoneno]=="")
	$phoneno="null";
else
	$phoneno="'$_POST[phoneno]'";

if ($_POST[sex]=="female")
	$sex=F;
else
	$sex=M;
$sex="'$sex'";

if($_POST[livingstatus]=="")
	$livingstatus="null";
else
	$livingstatus="'$_POST[livingstatus]'";


$date = $_POST[dob_y] . "-" . $_POST[dob_m] . "-" . $_POST[dob_d];

if($_POST[applicable]==0)
	$resign="null";
else
{
	$resign = $_POST[dob_y2] . "-" . $_POST[dob_m2] . "-" . $_POST[dob_d2];
	$resign = "'$resign'";
}

$joindate = $_POST[dob_y] . "-" . $_POST[dob_m] . "-" . $_POST[dob_d];
$joindate= "'$joindate'" ; 

$bloodgroup = "'$_POST[bloodgroup]'";

$period= "'$_POST[probationperiod]'";

$level= "'$_POST[level]'";



$sql="INSERT INTO Employee (FName,Mname, LName, WorkingHours, EmployeeID , Sex, DOB, JoiningDate, ResigningDate, BloodGroup, ProbationPeriod, LevelOfEmployment, Email, PhoneNo, LivingStatus, Department_Name)
VALUES
($Fname, $Mname ,$Lname,$Whours, $empid, $sex, '$date', $joindate, $resign, $bloodgroup, $period, $level, $email, $phoneno, $livingstatus, $dept)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
header("Location: employee_view.php");


mysql_close($con);
?> 
