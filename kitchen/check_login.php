<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" />
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>		
</head>
<body>
<a href="#page-2" data-rel="dialog">แสดง dialog</a>

	<div data-role="page" id="page-2">
		<div data-role="header"><h1>Dialog</h1></div>
		<div data-role="content">
			Username and Password Incorrect!	
			<a href="#" data-role="button" data-rel="back">Close</a>	
		</div>
	</div>	
<?php
//ini_set('max_execution_time', 3000); 
session_start();
$servername = 'WIN-BELL'; 
$databasename = 'master'; 
$user = ''; 
$pass = ''; 

$connection ="DRIVER={SQL Server};Server=WIN-BELL;Database=Master;Trusted_Connection=True";
$conn = odbc_connect($connection,'','');
//$strSQL = "SELECT * FROM users";
//$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");

//$objConnect = mssql_connect($connection,"","") or die("Error Connect to Database");
//$objDB = mssql_select_db("master");
//session_start();
//mysql_connect("localhost","root","root");
//mysql_select_db("mydatabase");
$strSQL = "SELECT * FROM users WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
and password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
$objExec = odbc_exec($conn, $strSQL) or die ("Error Execute [".$strSQL."]");
//$objQuery = mysql_query($strSQL);
$objResult = odbc_fetch_array($objExec);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id_users"] = $objResult["id_users"];
			$_SESSION["permission_fk"] = $objResult["permission_fk"];

			session_write_close();
			
			if($objResult["permission_fk"] == "2")
			{
				header("location:user_page.php");
			}
			else
			{
				header("location:admin_page.php");
			}
	}
	mysql_close();
?>
</body>	
</html>