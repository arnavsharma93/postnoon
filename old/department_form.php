<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 0) {
    header("Location:login.php");
    die();
    }
?>
<!DOCTYPE html5>
<html>
<head>
	<title>
	Department View
	</title>
</head>
<body>
<input type=button onClick="location.href='logout.php'" value='Logout' style="float: right;">

	<form action = "department_insert.php" method = "post">
	DName : <input type="text" name="DName"> </br>
	HOD ID : <input type="text" name="HOD_ID"> </br>
	<input type="submit">
	</form>
</body>
</html>


