<?php
  session_start();

  if ($_SESSION['is_logged_in'] == 0) {
    header("Location:login.php");
    die();
    }
?>
<!DOCTYPE HTML5>
<html>
    <head>
        <title>
            Index
        </title>
    </head>
		<body>
<input type=button onClick="location.href='logout.php'" value='Logout' style="float: right;">


        <a href="employee_form.php">Employee Form</a> </br>
        <a href="employee_view.php">Employee View</a>

        </br>
        </br>
        <a href="payroll_form.php">Payroll Form</a> </br>
        <a href="payroll_view.php">Payroll View</a>

        </br>
        </br>
        <a href="dependents_form.php">Dependents Form</a> </br>
        <a href="dependents_view.php">Dependents View</a>

        </br>
        </br>
        <a href="department_form.php">Department Form</a> </br>
        <a href="department_view.php">Department View</a>

        </br>
        </br>
        <a href="BalanceSheet_form.php">Balance Sheet Form</a> </br>
        <a href="BalanceSheet_view.php">Balance Sheet View</a>

        </br>
        </br>
        <a href="Advertisements_form.php">Advertisements Form</a> </br>
        <a href="Advertisements_view.php">Advertisements View</a>

        </br>
        </br>
        <a href="adclients_form.php">Ad Clients Form</a> </br>
        <a href="adclients_view.php">Ad Clients View</a>

        </br>
        </br>
        <a href="newssection_form.php">NEWS Section Form</a> </br>
        <a href="newssection_view.php">NEWS Section View</a>

        </br>
        </br>
        <a href="reporter_form.php">Reporter Form</a> </br>
        <a href="reporter_view.php">Reporter View</a>

        </br>
        </br>
        <a href="photographer_form.php">Photographer Form</a> </br>
        <a href="photographer_view.php">Photographer View</a>

        </br>
        </br>
        <a href="clicksfor_form.php">Clicks For Form</a> </br>
        <a href="clicksfor_view.php">Clicks For View</a>

        </br>
        </br>
        <a href="nfvarticles_form.php">NFV Articles Form</a> </br>
        <a href="nfvarticles_view.php">NFV Articles View</a>

        </br>
        </br>
        <a href="newsfeedvendor_form.php">News Feed Vendor Form</a> </br>
        <a href="newsfeedvendor_view.php">News Feed Vendor View</a>

        </br>
        </br>
        <a href="circulationarea_form.php">Circulation Area Form</a> </br>
				<a href="circulationarea_view.php">Circulation Area View</a>


        </br>
        </br>
        <a href="localdist_form.php">Local Distributor Form</a> </br>
				<a href="localdist_view.php">Local Distributor View</a>

        </br>
        </br>
        <a href="papervendor_form.php">Paper Vendor Form</a> </br>
        <a href="papervendor_view.php">Paper Vendor View</a>
				
				</br>
        </br>
        <a href="daytodaygoods_form.php">Day-to-Day Goods Form</a> </br>
        <a href="daytodaygoods_view.php">Day-to-Day Goods View</a>
    </body>
</html>

