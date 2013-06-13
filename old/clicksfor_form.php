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

	<form action="clicksfor_insert.php" method="post">

	Reporter ID:
	<input type="text" size="9" maxlength="9" name="reporterid" />
	</br>
	</br>
	Photographer ID:
	<input type="text" size="9" maxlength="9" name="photographerid" />
	</br>
	</br>

<input type="submit" />
</form>

</body>
</html> 



