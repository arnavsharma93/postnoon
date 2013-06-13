<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 1) {
    header("Location:index.php");
    die();
    }
?>

<!DOCTYPE html5>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=us-ascii">
    <title>Login</title>
  </head>

  <body>
    <form method="POST" action="check.php">
      Username:<br>
      <input name="username" type="text">
      <br><br>
      Password:<br>
      <input name="password" type="password">
      <br><br>
      <input id="submit" value="Submit" type="submit">
    </form>
  

</body></html>
