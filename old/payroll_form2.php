<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 0) {
    header("Location:login.php");
    die();
    }
?>
<!doctype html>
<html>
<body>
<input type=button onClick="location.href='logout.php'" value='Logout' style="float: right;">

<form action="payroll_insert.php" method="post">
	Employee ID: <input type="text" name="empid" />
	</br>
	</br>
	Salary: <input type="text" name="salary" />
	</br>
	</br>
	Paycut(Optional): <input type="text" name="paycut" />
	</br>
	</br>

	Month :
		<select name="month" id="month" >
	<script type="text/javascript">
		for(i=1; i<=12; i++)
		document.write('<option value="' +i + '">' + i + '</option>')

	</script>
	</select>
	</br>
	</br>

	PPF: <input type="text" name="ppf" />
	</br>
	</br>
	

<input type="submit" />
</form>

</body>
</html> 


