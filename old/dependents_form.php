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

	<form action="dependents_insert.php" method="post">

	Name: <input type="text" name="name" />
	</br>
	</br>
	Age: <input type="text" name="age" />
	</br>
	</br>
 Sex:
	<input type="radio" name="sex" value="male" checked="checked">Male
	<input type="radio" name="sex" value="female">Female
 
	</br>
	</br>
	Employee ID: <input type="text" size="9" maxlength="9" name="employeeid" />
	</br>
	</br>

<input type="submit" />
</form>

</body>
</html> 



