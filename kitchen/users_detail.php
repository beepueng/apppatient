<?php 
require_once "../include/common.php";
require_once "../include/connect_db.php";
?>
<!DOCTYPE html>
<html>
<head>

	<title>Kitchen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="../css/jquery.ui-1.8.23.custom.css" />
	<link rel="stylesheet" href="../css/jquery.mobile-1.3.0.min.css" />

	<script src="../js/jquery-1.8.2.min.js"></script>
	<script src="../js/jquery-ui-1.8.23.custom.min.js"></script>
	<script src="../js/jquery.mobile-1.3.0.min.js"></script>
	<script src="js_kitchen/webapp.kitchen.view_menu_order.js"></script>

</head>
<body>

	<div data-role="page" id="view_menu_order.php" data-overlay-theme="a" >
	<!--<a href="view_menu_order.php" data-ajax="false">-->
		<div data-role="header">
			<a href="view_menu_order.php" data-icon="back">Home</a>
			<h1>รายการประวัติผู้ใช้</h1>

		</div>

		<div data-role="content">			 

		<?php
$objConnect = mysql_connect("localhost","root","1q2w3e4r5t") or die("Error Connect to Database");
$objDB = mysql_select_db("my_user");
$strSQL = "SELECT * FROM users";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
   <tr>
    <th width="91"> <div align="center">id_users</div></th>
    <th width="98"> <div align="center">ชื่อผู้ใช้</div></th>
    <th width="198"> <div align="center">password</div></th>
    <th width="97"> <div align="center">permission_fk</div></th>
	<th width="98"> <div align="center">name</div></th>
    <th width="198"> <div align="center">birthdate</div></th>
    <th width="97"> <div align="center">sex</div></th>
	<th width="97"> <div align="center">telnumber</div></th>
	<th width="97"> <div align="center">telnumber2</div></th>
	<th width="97"> <div align="center">disease</div></th>
	<th width="97"> <div align="center">other</div></th>
	<th width="97"> <div align="center">food</div></th>
    <th width="59"> <div align="center">created_by </div></th>
    <th width="71"> <div align="center">created_when </div></th>
	<th width="50"> <div align="center">updated_by </div></th>
	<th width="50"> <div align="center">updated_when </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
    <tr>
    <td><div align="center"><?php echo $objResult["id_users"];?></div></td>
    <td><?php echo $objResult["username"];?></td>
    <td><?php echo $objResult["password"];?></td>
    <td><div align="center"><?php echo $objResult["permission_fk"];?></div></td>
	<td><div align="center"><?php echo $objResult["name"];?></div></td>
	<td><div align="center"><?php echo $objResult["birthdate"];?></div></td>
	<td><div align="center"><?php echo $objResult["sex"];?></div></td>
	<td><div align="center"><?php echo $objResult["telnumber"];?></div></td>
	<td align="right"><?php echo $objResult["telnumber2"];?></td>
	<td align="right"><?php echo $objResult["disease_fk"];?></td>
	<td align="right"><?php echo $objResult["other"];?></td>
	<td align="right"><?php echo $objResult["food"];?></td>
    <td align="right"><?php echo $objResult["created_by"];?></td>
    <td align="right"><?php echo $objResult["created_when"];?></td>
	<td align="right"><?php echo $objResult["updated_by"];?></td>
	<td align="right"><?php echo $objResult["updated_when"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</div>				

</div>

</body>
</html>