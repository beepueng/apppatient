<!DOCTYPE html>
<html>

<head>
	<title>ระบบประเมินภาวะทางโภชนาการ (PG-SGA)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" />
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>		
</head>

<body>
	
	<div data-role="page" id="page-home">			
		<div data-role="header" data-position="fixed">				
			<h1>การประเมินภาวะโภชนาการ</h1>				
		</div>
		<div data-role="content">						
			<ul data-role="listview" data-inset="true">
			
&nbsp;ยินดีต้อนรับ : 
<?php
$username = $_GET["Name"];
echo $_GET["Name"]."<br>";
//echo $username;
//<a href="userpage.php?id=1">Book 1</a>
?>
			<form name="form1" method="post" action="frm1.php">
				<input type="hidden" name="test1" value=" <?php echo $_GET["Name"]; ?> ">
				<input type="submit" name="Submit" value="เริ่มทำเเบบประเมิน">
				<!--<a data-role = "button" data-icon = "gear" href="userpage.php?"> เริ่มทำเเบบประเมิน </a>-->
				</form>
				<!--<br>							
				<a data-role = "button" data-icon = "delete" href="index.html"> ออกจากระบบ </a>-->
			</ul>
		</div>						
		<div data-role="footer" data-position="fixed">
			<!--<h4>ฟุตเตอร์</h4>-->		
			<div data-role= "navbar">
			<ul>
			<li> <a href="welcome.php" >แบบประเมิน</a></li>
			<li> <a href="index.html" >ออกจากระบบ </a></li>
			</ul>
		</div>
	</div>
	
</body>	
</html>
