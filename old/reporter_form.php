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

	<form action="reporter_insert.php" method="post">

 	Employee ID:
	<input type="text" size="9" maxlength="9" name="empid" />
	</br>
	</br>
	
	No. of articles submitted:
	<input type="text" name="submitted" />
	</br>
	</br>
	No. of articles published:
	<input type="text" name="published" />
	</br>
	</br>
	Category:
	<input type="text" name="category" />
	</br>
	</br>

<input type="submit" />
</form>

</body>
</html> 



