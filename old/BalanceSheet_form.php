<?php
  session_start();

  if (!isset($_SESSION['is_logged_in'])) {
    header("Location:login.php");
    die();
    }
?>
<!DOCTYPE html5>
<html>
<head>
	<title>
	BalanceSheet Form
	</title>
</head>
<body>

<input type=button onClick="location.href='logout.php'" value='Logout' style="float: right;">

	<form action = "BalanceSheet_insert.php" method = "post">
	Process Name : <input type="text" name="ProcessName"> </br>
	Date : <input type="date" name="Date"> </br>
	Input: <input type="radio" name="I_O" value = "I">  Output: <input type="radio" name="I_O" value="O"> </br>
	Amount : <input type="text" name="Amount"> </br>
	Department Name : <input type="text" name="DepartmentName"> </br>
	<input type="submit">
	</form>
</body>
</html>


