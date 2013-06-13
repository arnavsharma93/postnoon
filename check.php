<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
    mysql_connect('localhost',"root","iiit123");
    mysql_select_db("postnoon") or die("Unable to connect to Database");
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $result = mysql_query("SELECT * FROM users where username = '$username' AND password = '$password'");

		$num = mysql_num_rows($result);
		while($num--)
		{
			$row= mysql_fetch_array($result);
			$_SESSION['isadmin']=$row[isadmin];
			$_SESSION['username']=$row[username];
			if($row[isadmin]==1)
				break;
		}

    if(mysql_num_rows($result) > 0){
        $_SESSION['is_logged_in'] = 1;
				$_SESSION['failed'] = 0;

       header('location:index.php');

		}
		else
		{
			$_SESSION['is_logged_in'] = 0;

			$_SESSION['failed'] = 1;
        header('location:login.php');
		}

}
?>

