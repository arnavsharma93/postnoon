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

<form action="employee_insert.php" method="post">
	Employee ID: <input type="text" size="9" maxlength="9" name="employeeid" />
	</br>
	</br>
	Department Name: <input type="text" name="deptname" />
	</br>
	</br>
	First Name: <input type="text" name="firstname" />
	</br>
	</br>
	Middle Name: <input type="text" name="middlename" />
	</br>
	</br>
  Last Name: <input type="text" name="lastname" />
	</br>
	</br>
 Sex:
	<input type="radio" name="sex" value="male" checked="checked">Male
	<input type="radio" name="sex" value="female">Female
 
	</br>
	</br>

	Blood Group:
	<select name="bloodgroup" id="bloodgroup">
		<option value ="O+"> O+ </option>
		<option value ="A+"> A+ </option>
		<option value ="B+"> B+ </option>
		<option value ="AB+"> AB+ </option>
		<option value ="O-"> O- </option>
		<option value ="A-"> A- </option>
		<option value ="B-"> B- </option>
		<option value ="AB-"> AB- </option>
	</select>
	</br>
	</br>
	Email: <input type="text" name="email" />
	</br>
	</br>
	
	Phone Number: <input type="text" name="phoneno" size="10" maxlength="10" />
	</br>
	</br>

  Working Hours: <input type="text" name="workinghours" />
	</br>
	</br>
	
	Date Of Birth: 
	
	<select name="dob_y" id="dob_y" onchange="document.cookie=this.selectedIndex; window.open(this.options[this.selectedIndex].value,'_top')">
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

	Joining Date:
		<select name="dob_y3" id="dob_y3" onChange='window.location.reload()'>
	<script type="text/javascript">
		for(i=1940; i<=2012; i++)
		document.write('<option value="' +i + '">' + i + '</option>')
	</script>
	</select>

	<select name="dob_m3" id="dob_m3" onChange='window.location.reload()'>
	<script type="text/javascript">
		for(i=1; i<=12; i++)
		document.write('<option value="' +i + '">' + i + '</option>')

	</script>
	</select>

	<select name="dob_d3" id="dob_d3">
	<script type="text/javascript">
		month2 = document.getElementById("dob_m3");
		val = month2.options[month2.selectedIndex].value;
		year2 = document.getElementById("dob_y3");
		year = year2.options[year2.selectedIndex].value;
		
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

	Level of Employment:
	<select name="level" id="level">
		<option value ="H"> High </option>
		<option value ="L"> Low </option>
	</select>
	</br>
	</br>

	Living Status: <input type="text" name="livingstatus"/>
	</br>
	</br>

	Resigning Date(optional):

	
	<select name="applicable" id="applicable" onChange='window.location.reload()'>
		<option value ="0"> NA </option>
		<option value ="1"> Resigned </option>
	</select>
	
	<select name="dob_y2" id="dob_y2" onChange='window.location.reload()'>
	<script type="text/javascript">
		for(i=1940; i<=2012; i++)
		document.write('<option value="' +i + '">' + i + '</option>')
	</script>
	</select>

	<select name="dob_m2" id="dob_m2" onChange='window.location.reload()'>
	<script type="text/javascript">
		for(i=1; i<=12; i++)
		document.write('<option value="' +i + '">' + i + '</option>')

	</script>
	</select>

	<select name="dob_d2" id="dob_d2">
	<script type="text/javascript">
		month2 = document.getElementById("dob_m2");
		val = month2.options[month2.selectedIndex].value;
		year2 = document.getElementById("dob_y2");
		year = year2.options[year2.selectedIndex].value;
		
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
	<script type="text/javascript">
		resigned=document.getElementById("applicable");
		app = resigned.options[resigned.selectedIndex].value;

		if(app==0)
		{
			document.getElementById("dob_y2").style.display="none";
			document.getElementById("dob_m2").style.display="none";
			document.getElementById("dob_d2").style.display="none";
		}
		else
		{
			document.getElementById("dob_y2").style.display="";
			document.getElementById("dob_m2").style.display="";
			document.getElementById("dob_d2").style.display="";
		}
	</script>

	</br>
	</br>
	Probation Period in months (if any): <input type="text" name="probationperiod" value="0" />
	</br>
	</br>



<input type="submit" />
</form>

</body>
</html> 
