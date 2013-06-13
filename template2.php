<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 0) {
    header("Location:login.php");
    die();
    }
?>
<html>
 
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Simpla Admin</title>
		
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
					<a href="http://www.google.com" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Articles
					</a>
					<ul>
						<li><a href="#">Write a new Article</a></li>
						<li><a class="current" href="#">Manage Articles</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="#">Manage Comments</a></li>
						<li><a href="#">Manage Categories</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Pages
					</a>
					<ul>
						<li><a href="#">Create a new Page</a></li>
						<li><a href="#">Manage Pages</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Image Gallery
					</a>
					<ul>
						<li><a href="#">Upload Images</a></li>
						<li><a href="#">Manage Galleries</a></li>
						<li><a href="#">Manage Albums</a></li>
						<li><a href="#">Gallery Settings</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Events Calendar
					</a>
					<ul>
						<li><a href="#">Calendar Overview</a></li>
						<li><a href="#">Add a new Event</a></li>
						<li><a href="#">Calendar Settings</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Settings
					</a>
					<ul>
						<li><a href="#">General</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Your Profile</a></li>
						<li><a href="#">Users and Permissions</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
					
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
			<h2>Employee Form</h2>
			<p id="page-intro">Enter Employee Details</p>
			
					
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
	
					
					<div class="tab-content" id="tab2">
					
	<form action="employee_insert.php" method="post">

							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Employee ID:</label>
										<input class="text-input small-input" type="text" size="9" maxlength="9" name="employeeid" />

										<br /><small>Enter your unique Employee ID</small>
								</p>
								
							<p>
									<label>Department Name:</label>
										<input class="text-input small-input" type="text" name="deptname" />

								</p>
								<p>
									<label>First Name:</label>
										<input class="text-input small-input" type="text" name="firstname" />

								</p>
								
								<p>	<label>Middle Name:</label>
										<input class="text-input small-input" type="text" name="middlename" />
								</p>	
	
								<p>	<label>Last Name:</label>
										<input class="text-input small-input" type="text" name="lastname" />
								</p>	

								<p>
									<label>Sex</label>
									<input type="radio" name="sex" value="male" checked="checked" /> Male
									<input type="radio"  name="sex" value="female" /> Female
								</p>
								

								<p>
									<label>Blood Group</label>              
									<select name="bloodgroup" class="small-input"  id="bloodgroup">
									<option value ="O+"> O+ </option>
		<option value ="A+"> A+ </option>
		<option value ="B+"> B+ </option>
		<option value ="AB+"> AB+ </option>
		<option value ="O-"> O- </option>
		<option value ="A-"> A- </option>
		<option value ="B-"> B- </option>
		<option value ="AB-"> AB- </option>
									</select> 
								</p>

								<p>	<label>Email:</label>
										<input class="text-input small-input" type="text" name="email" />
								</p>	

								<p>	<label>Phone No:</label>
										<input class="text-input small-input" type="text" name="phoneno" size="10" maxlength="10" />
								</p>	

								<p>	<label>Working Hours:</label>
										<input class="text-input small-input" type="text" name="workinghours" />
								</p>	

								<p>	<label>Date Of Birth:</label>
										<input type="date" name="date">
								</p>

								<p>	<label>Date Of Joining:</label>
										<input type="date" name="joiningdate">
								</p>
								<p>
									<label>	Level of Employment:</label>              
									<select name="level" class="small-input"  id="level">
										<option value ="H"> High </option>
										<option value ="L"> Low </option>
									</select> 
								</p>


							<p>	<label>Living Status</label>
										<input class="text-input small-input" type="text" name="livingstatus" />
								</p>	

								<p>
									<label>Resigning Date(optional):</label>              
									<select name="applicable" class="small-input"  id="applicable">
								<option value ="0"> NA </option>
								<option value ="1"> Resigned </option>

									</select> 
								</p>
							
								<p>	<label>Date Of Resignation(if any):</label>
										<input type="date" name="resignationdate">
								</p>


															
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
					
			
						</div> <!-- End #main-content -->
		
	</div></body>
  
</html>
