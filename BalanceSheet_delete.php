<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 0) {
    header("Location:login.php");
    die();
	}
		if($_SESSION['isadmin']==0)
	{
		header("Location:notauthorised.php");
		die();
	}


?>
<html>
 
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Postnoon</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->


		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<a href="logout.php" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="index.php" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Home
					</a>       
				</li>

<li>
<a href=employee_form.php class=nav-top-item>
employee
</a>
<ul>
<li><a href=employee_form.php>Insert</a></li>
<li><a href=employee_view.php>View</a></li>
<li><a href=employee_delete.php>Delete Entry</a></li>
<li><a href=employee_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=payroll_form.php class=nav-top-item>
payroll
</a>
<ul>
<li><a href=payroll_form.php>Insert</a></li>
<li><a href=payroll_view.php>View</a></li>
<li><a href=payroll_delete.php>Delete Entry</a></li>
<li><a href=payroll_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=dependents_form.php class=nav-top-item>
dependents
</a>
<ul>
<li><a href=dependents_form.php>Insert</a></li>
<li><a href=dependents_view.php>View</a></li>
<li><a href=dependents_delete.php>Delete Entry</a></li>
<li><a href=dependents_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=department_form.php class=nav-top-item>
department
</a>
<ul>
<li><a href=department_form.php>Insert</a></li>
<li><a href=department_view.php>View</a></li>
<li><a href=department_delete.php>Delete Entry</a></li>
<li><a href=department_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=BalanceSheet_form.php class=nav-top-item>
BalanceSheet
</a>
<ul>
<li><a href=BalanceSheet_form.php>Insert</a></li>
<li><a href=BalanceSheet_view.php>View</a></li>
<li><a href=BalanceSheet_delete.php>Delete Entry</a></li>
<li><a href=BalanceSheet_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=Advertisements_form.php class=nav-top-item>
Advertisements
</a>
<ul>
<li><a href=Advertisements_form.php>Insert</a></li>
<li><a href=Advertisements_view.php>View</a></li>
<li><a href=Advertisements_delete.php>Delete Entry</a></li>
<li><a href=Advertisements_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=adclients_form.php class=nav-top-item>
adclients
</a>
<ul>
<li><a href=adclients_form.php>Insert</a></li>
<li><a href=adclients_view.php>View</a></li>
<li><a href=adclients_delete.php>Delete Entry</a></li>
<li><a href=adclients_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=newssection_form.php class=nav-top-item>
newssection
</a>
<ul>
<li><a href=newssection_form.php>Insert</a></li>
<li><a href=newssection_view.php>View</a></li>
<li><a href=newssection_delete.php>Delete Entry</a></li>
<li><a href=newssection_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=reporter_form.php class=nav-top-item>
reporter
</a>
<ul>
<li><a href=reporter_form.php>Insert</a></li>
<li><a href=reporter_view.php>View</a></li>
<li><a href=reporter_delete.php>Delete Entry</a></li>
<li><a href=reporter_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=photographer_form.php class=nav-top-item>
photographer
</a>
<ul>
<li><a href=photographer_form.php>Insert</a></li>
<li><a href=photographer_view.php>View</a></li>
<li><a href=photographer_delete.php>Delete Entry</a></li>
<li><a href=photographer_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=clicksfor_form.php class=nav-top-item>
clicksfor
</a>
<ul>
<li><a href=clicksfor_form.php>Insert</a></li>
<li><a href=clicksfor_view.php>View</a></li>
<li><a href=clicksfor_delete.php>Delete Entry</a></li>
<li><a href=clicksfor_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=nfvarticles_form.php class=nav-top-item>
nfvarticles
</a>
<ul>
<li><a href=nfvarticles_form.php>Insert</a></li>
<li><a href=nfvarticles_view.php>View</a></li>
<li><a href=nfvarticles_delete.php>Delete Entry</a></li>
<li><a href=nfvarticles_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=newsfeedvendor_form.php class=nav-top-item>
newsfeedvendor
</a>
<ul>
<li><a href=newsfeedvendor_form.php>Insert</a></li>
<li><a href=newsfeedvendor_view.php>View</a></li>
<li><a href=newsfeedvendor_delete.php>Delete Entry</a></li>
<li><a href=newsfeedvendor_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=circulationarea_form.php class=nav-top-item>
circulationarea
</a>
<ul>
<li><a href=circulationarea_form.php>Insert</a></li>
<li><a href=circulationarea_view.php>View</a></li>
<li><a href=circulationarea_delete.php>Delete Entry</a></li>
<li><a href=circulationarea_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=localdistributer_form.php class=nav-top-item>
localdistributer
</a>
<ul>
<li><a href=localdistributer_form.php>Insert</a></li>
<li><a href=localdistributer_view.php>View</a></li>
<li><a href=localdistributer_delete.php>Delete Entry</a></li>
<li><a href=localdistributer_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=papervendor_form.php class=nav-top-item>
papervendor
</a>
<ul>
<li><a href=papervendor_form.php>Insert</a></li>
<li><a href=papervendor_view.php>View</a></li>
<li><a href=papervendor_delete.php>Delete Entry</a></li>
<li><a href=papervendor_modify.php>Modify Entry</a></li>
</ul>
</li>
<li>
<a href=daytodaygoods_form.php class=nav-top-item>
daytodaygoods
</a>
<ul>
<li><a href=daytodaygoods_form.php>Insert</a></li>
<li><a href=daytodaygoods_view.php>View</a></li>
<li><a href=daytodaygoods_delete.php>Delete Entry</a></li>
<li><a href=daytodaygoods_modify.php>Modify Entry</a></li>
</ul>
</li>			<!-- End #main-nav -->
			
					
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>View</h2>
			
					
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
	
					
					<div class="tab-content" id="tab2">

				
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
					

<?php
$con = mysql_connect("localhost","root","iiit123");
if(!$con)
{
	die('Could not connect ' . mysql.error() );
}
mysql_select_db('postnoon',$con);

$result = mysql_query("SELECT * FROM BalanceSheet");

echo "<table border = '1'>
<tr>
<th> </th>
<th> ProcessName </th>
<th> Date </th>
<th> I/O </th>
<th> Amount </th>
<th> Department Name </th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
echo "<form action='BalanceSheet_delete_action.php' method='post'>";
  echo "<td>";
  echo "<input value='Delete' type='submit'>";
  echo "</td>";
  echo "<input type='hidden' name='ProcessName' value=" . $row[ProcessName].">";
  echo "<input type='hidden' name='Date' value=" . $row[Date].">";
  echo "</form>";
	echo "<td>" . $row['ProcessName'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['I_O'] . "</td>";
	echo "<td>" . $row['Amount'] . "</td>";
	echo "<td>" . $row['DepartmentName'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>




		


															
						
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
					
			
						</div> <!-- End #main-content -->
		
	</div></body>
  
</html>

