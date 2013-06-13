<?php
$con = mysql_connect("localhost","root","iiit123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


// Create table
mysql_select_db("postnoon", $con);

$sql= "CREATE TABLE users (
	EmployeeID varchar(9) NOT NULL,
	username varchar(32) NOT NULL,
	password varchar(32) NOT NULL,
	isadmin int(1) DEFAULT 0, 
  PRIMARY KEY  (EmployeeID)
)";

if(!mysql_query($sql,$con))
{
	 echo('Error: ' . mysql_error());
}
else
{
	echo "Table Users created\n";
}



$sql = "CREATE TABLE Employee
(
EmployeeID varchar(9) NOT NULL,
WorkingHours int not null,
ResigningDate date ,
FName varchar(15) NOT NULL,
MName varchar(15),
LName varchar(15) not null,
Sex char not null,
Email varchar(20) not null,
PhoneNo numeric(10,0) not null,
DOB date not null, 
JoiningDate date not null, 
BloodGroup varchar(3) not null,
ProbationPeriod int,
LevelofEmployment char not null, 
LivingStatus varchar(15) not null,
Department_Name varchar(15) not null,

PRIMARY KEY(EmployeeID)

)";
// Execute query
if(!mysql_query($sql,$con))
{
	 echo('Error: ' . mysql_error());
}
else
{
	echo "Table Employee created\n";
}

$sql = "CREATE TABLE Payroll(
EmployeeID varchar(9) not null,
Salary decimal(10,2) not null,
Pay_cut decimal(10,2),
Month int not null,
PPF decimal(13,2) not null,

PRIMARY KEY(EmployeeID)
)";
// Execute query
if(!mysql_query($sql,$con))
{
	 echo('Error: ' . mysql_error());
}
else
{
	echo "Table Payroll created\n";
}

$sql = "CREATE TABLE Dependents(
Name varchar(15) not null,
Age int not null,
Sex char not null,
EmployeeID varchar(9) not null,

PRIMARY KEY(Name, EmployeeID)

)";
// Execute query
if(!mysql_query($sql,$con))
{
	 echo('Error: ' . mysql_error());
}
else
{
	echo "Table Dependents Created\n";
}

$sql = "CREATE TABLE Department(
	DName varchar(15) not null,
	HeadofDepartmentID varchar(9) not null,

	PRIMARY KEY(DName)
)";
// Execute query
if(!mysql_query($sql,$con))
{
	 echo('Error: ' . mysql_error());
}
else
{
	echo "Table Department created\n";
}


$sql = "CREATE TABLE BalanceSheet(
	ProcessName varchar(15) not null,
	Date date not null,
	I_O char not null,
	Amount decimal(13,2) not null,
	DepartmentName varchar(15) not null,

	PRIMARY KEY(ProcessName, Date)
)";
// Execute query
if(!mysql_query($sql,$con))
{
	 echo('Error: ' . mysql_error());
}
else
{
	echo "Table BalanceSheet created\n";
}

$sql = "CREATE TABLE Advertisements(
	Invoice_No int not null,
	Cost Decimal(10,2) not null,
	Product varchar(15) not null,
	Printing_Date DATE not null,
	Number_of_Ads INT not null,
	Handeled_By varchar(15) not null,
	Client_Name varchar(15) not null,

	Primary Key (Invoice_No)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Advertisements Created\n";
}

$sql = "CREATE TABLE Ad_Clients(
	Name varchar(15) not null,
	Type varchar(15) not null,
	Manager varchar(15) not null,

	Primary Key (Name)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Ad_Clients Created\n";
}

$sql = "CREATE TABLE NEWS_Section(
	Category_Name varchar(15) not null,
	Assistant_Editor_ID varchar(9) not null,
	Sub_Editor_ID varchar(9) not null,
	Handled_By varchar(15) not null,

	Primary Key (Category_Name)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table NEWS_Section Created\n";
}

$sql = "CREATE TABLE Reporter(
	EmployeeID varchar(9) not null,
	Total_Articles int not null,
	Total_Published int not null,
	Category varchar(15) not null,

	Primary Key (EmployeeID)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Reporter Created\n";
}

$sql = "CREATE TABLE Photographer(
	EmployeeID varchar(9) not null,
	Assignment varchar(15) not null,

	Primary Key (EmployeeID)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Photographer Created\n";
}
$sql = "CREATE TABLE Clicks_For(
	ReporterID varchar(9) not null,
	PhotographerID varchar(9) not null,

	Primary Key (ReporterID, PhotographerID)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Clicks_For Created\n";
}

$sql = "CREATE TABLE NFV_Articles(
	Date date not null,
	Topic varchar(15) not null,
	Page_Number int not null,
	Category varchar(15) not null,
	Vendor_Name varchar(15) not null,

	Primary Key (Date, Topic, Page_Number)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table NFV_Articles Created\n";
}

$sql = "CREATE TABLE NFV(
	Name varchar(15) not null,
	Contract_Date date not null,
	Contract_Cost decimal(10,2) not null,

	Primary Key (Name)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table NFV Created\n";
}
$sql = "CREATE TABLE Circulation_Area(
	Name varchar(15) not null,
	ExecutiveID varchar(9) not null,
	Handled_By varchar(15) not null,

	Primary Key (Name)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Circulation_Area Created\n";
}

$sql = "CREATE TABLE Local_Distributor(
	Name varchar(15) not null,
	Date date not null,
	Paper_Sold int not null,
	Money decimal(13,2) not null,
	Area_Name varchar(15) not null,

	Primary Key (Name, Area_Name)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Local_Distributor Created\n";
}
$sql = "CREATE TABLE Paper_Vendor(
	Name varchar(15) not null,
	Date date not null,
	Cost decimal(10,2) not null,
	Handled_By varchar(15) not null,

	Primary Key (Name, Date)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table Paper_Vendor Created\n";
}
$sql = "CREATE TABLE D2D_Goods(
	Type varchar(15) not null,
	Date date not null,
	Cost decimal(10,2) not null,
	Bought_By varchar(15) not null,

	Primary Key (Type, Date)
)";

//execute query
if(!mysql_query($sql,$con))
{
	echo('Error: ' . mysql_error());
}
else
{
	echo "Table D2D_Goods Created\n";
}
//fk_DName

$fk = "ALTER TABLE Employee Add Constraint fk_DName FOREIGN KEY(Department_Name) References Department(DName)";



//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_DName Added' . "\n" );
}
//fk_P_Eid

$fk = "ALTER TABLE Payroll Add Constraint fk_P_Eid FOREIGN KEY(EmployeeID) References Employee(EmployeeID) ";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_P_Eid Added' . "\n");
}
//fk_Dep_Eid

$fk = "ALTER TABLE Dependents Add Constraint fk_Dep_Eid FOREIGN KEY(EmployeeID) References Employee(EmployeeID) ";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_Dep_Eid Added' . "\n");
}
//fk_Dpt_HOD
$fk = "ALTER TABLE Department Add Constraint fk_Dpt_HOD FOREIGN KEY(HeadOfDepartmentID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_Dpt_HOD Added' . "\n");
}
//fk_BS_DName
$fk = "ALTER TABLE BalanceSheet Add Constraint fk_BS_DName FOREIGN KEY(DepartmentName) References Department(DName)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_BS_DName Added' . "\n");
}
//fk_Adv_DName
$fk = "ALTER TABLE Advertisements Add Constraint fk_Adv_Dname FOREIGN KEY(Handeled_By) References Department(DName)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_Adv_DName Added' . "\n");
}
//fk_Adc_Man
$fk = "ALTER TABLE Ad_Clients Add Constraint fk_Adc_Man FOREIGN KEY(Manager) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_Adc_Man Added' . "\n");
}

//fk_NS_Hby
$fk = "ALTER TABLE NEWS_Section Add Constraint fk_NS_Hby FOREIGN KEY(Handled_By) References Department(DName)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_NS_Hby Added' . "\n");
}
//fk_NS_SEid
$fk = "ALTER TABLE NEWS_Section Add Constraint fk_NS_SEid FOREIGN KEY(Sub_Editor_ID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_NS_SEid Added' . "\n");
}
//fk_NS_AEid
$fk = "ALTER TABLE NEWS_Section Add Constraint fk_NS_AEid FOREIGN KEY(Assistant_Editor_ID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_NS_AEid Added' . "\n");
}

//fk_Re_Eid
$fk = "ALTER TABLE Reporter Add Constraint fk_Re_Eid FOREIGN KEY(EmployeeID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_Re_Eid Added' . "\n");
}
//fk_Ph_Eid
$fk = "ALTER TABLE Photographer Add Constraint fk_Ph_Eid FOREIGN KEY(EmployeeID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_Ph_Eid Added' . "\n");
}
//fk_CF_Rid
$fk = "ALTER TABLE Clicks_For Add Constraint fk_CK_Rid FOREIGN KEY(ReporterID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_CF_Rid Added' . "\n");
}
//fk_CF_Pid
$fk = "ALTER TABLE Clicks_For Add Constraint fk_CK_Pid FOREIGN KEY(PhotographerID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_CF_Pid Added' . "\n");
}
//fk_NA_Cat
$fk = "ALTER TABLE NFV_Articles Add Constraint fk_NA_Cat FOREIGN KEY(Category) References NEWS_Section(Category_Name)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_NA_Cat Added' . "\n");
}
//fk_NA_VName
$fk = "ALTER TABLE NFV_Articles Add Constraint fk_NA_VName FOREIGN KEY(Vendor_Name) References NFV(Name)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_NA_VName Added' . "\n");
}
//fk_CA_Eid
$fk = "ALTER TABLE Circulation_Area Add Constraint fk_CA_Eid FOREIGN KEY(ExecutiveID) References Employee(EmployeeID)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_CA_Eid Added' . "\n");
}
//fk_CA_Hby
$fk = "ALTER TABLE Circulation_Area Add Constraint fk_CA_Hby FOREIGN KEY(Handled_By) References Department(DName)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_CA_Hby Added' . "\n");
}
//fk_LD_AN
$fk = "ALTER TABLE Local_Distributor Add Constraint fk_LN_AN FOREIGN KEY(Area_Name) References Circulation_Area(Name)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_LD_AN Added' . "\n");
}
//fk_PV_HBY
$fk = "ALTER TABLE Paper_Vendor Add Constraint fk_PV_Hby FOREIGN KEY(Handled_By) References Department(DName)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_PV_HBY Added' . "\n");
}
//fk_D2D_Bby
$fk = "ALTER TABLE D2D_Goods Add Constraint fk_D2D_Bby FOREIGN KEY(Bought_By) References Department(DName)";

//execute
 
if(!mysql_query($fk,$con))
{
	echo('ERROR ' . mysql_error());
}
else
{
	echo('fk_D2D_Bby Added' . "\n");
}
mysql_close($con);
?> 


