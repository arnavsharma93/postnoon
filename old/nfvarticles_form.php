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

	<form action="nfvarticles_insert.php" method="post">

			Date: 
	
	<select name="dob_y" id="dob_y" onChange='window.location.reload()'>
	<script type="text/javascript">
		for(i=1940; i<=2012; i++)
		document.write('<option value="' +i + '">' + i + '</option>')
	</script>
	</select>

	<select name="dob_m" id="dob_m" onChange='window.location.reload()'>
	<script type="text/javascript">
		for(i=1; i<=12; i++)
		document.write('<option value="' +i + '">' + i + '</option>')

	</script>
	</select>

	<select name="dob_d" id="dob_d">
	<script type="text/javascript">
		month = document.getElementById("dob_m");
		val = month.options[month.selectedIndex].value;
		year = document.getElementById("dob_y");
		year = year.options[year.selectedIndex].value;
		
		if(val==2)
		{
				for(i=1; i<=28; i++)
					document.write('<option value="' +i + '">' + i + '</option>');
				if(year%4 ==0)
					document.write('<option value="' +29 + '">' + 29 + '</option>');


		}
		else if(val <=7)
		{
				for(i=1; i<=30; i++)
					document.write('<option value="' +i + '">' + i + '</option>');
				if(val%2!=0)
					document.write('<option value="' +31 + '">' + 31 + '</option>');

			
		}
		else
		{
				for(i=1; i<=30; i++)
					document.write('<option value="' +i + '">' + i + '</option>');
				if(val%2==0)
					document.write('<option value="' +31 + '">' + 31 + '</option>');

		}
	</script>
	</select>
	</br>
	</br>

	Topic: <input type="text" name="topic" />
	</br>
	</br>
	Page No: <input type="text" name="pageno" />
	</br>
	</br>
 	Category:
	 <input type="text" name="category" />
	</br>
	</br>
	Vendor Name: <input type="text" name="vendor" />
	</br>
	</br>

<input type="submit" />
</form>

</body>
</html> 



