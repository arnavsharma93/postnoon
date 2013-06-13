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

	<form action="newssection_insert.php" method="post">

	Category Name: <input type="text" name="categoryname" />
	</br>
	</br>
	Assistant Editor ID: <input type="text" size="9" maxlength="9" name="assistantid" />
	</br>
	</br>
	Sub Editor ID: <input type="text" size="9" maxlength="9" name="subeditorid" />
	</br>
	</br>
	Handeled By Department: <input type="text" name="handeledbydept" />
	</br>
	</br>

<input type="submit" />
</form>

</body>
</html> 



