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

	<form action="circulationarea_insert.php" method="post">

	Name: <input type="text" name="name" />
	</br>
	</br>
 	Executive ID:
	<input type="text" size="9" maxlength="9" name="executiveid" />
	</br>
	</br>
	Handeled By: <input type="text" name="handeledby" />
	</br>
	</br>

<input type="submit" />
</form>

</body>
</html> 



