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
	Advertisements Form
	</title>
</head>
<body>
<input type=button onClick="location.href='logout.php'" value='Logout' style="float: right;">
	<form action = "Advertisements_insert.php" method = "post">
	Invoice Number : <input type="text" name="Invoice_No"> </br>
	Cost : <input type="text" name="Cost"> </br>
	Product : <input type="text" name="Product"> </br>
	Printing Date : <input type="date" name="Printing_Date"> </br>
	Number of Ads : <input type="text" name="Number_of_Ads"> </br>
	Handeled By : <input type="text" name="Handeled_By"> </br>
	Client Name : <input type="text" name="Client_Name"> </br>
	<input type="submit">
	</form>
</body>
</html>


