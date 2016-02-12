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
			<a href="frm1.php"> ย้อนกลับ  </a>	
			<a href="frm3.php"> ต่อไป </a>
			<h1>ปริมาณอาหารที่ทาน</h1>	
			<table  align = "center">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
					 <td> หน้าที่ 2 จาก  </td>
					  <td><a href="frm1.php" data-ajax="false"style="text-align:center;"> 1 </td>
                           <td> 2 </td>
                           <td><a href="frm3.php" data-ajax="false"style="text-align:center;"> 3 </a> </td>
						   <td><a href="frm4.php" data-ajax="false"style="text-align:center;"> 4 </a> </td>
                      </tr> 
		   
		   </table>
					
		</div>
		<div data-role="content">						
		<ul data-role="listview" data-inset="true">
            <form action="phpSQLServerAddSave2.php" name="frmAdd" method="post">	
                &nbsp;เปรัยบเทียบกับการทานอาหารตอนเป็นปกติ  คุณรู้สึกว่าการทานอาหารใน 1 เดือน ที่ผ่านมาคุณทานอาหารได้เป็นยังไง 
		          <table align = "center" style="width: 100%">
                      <!--เริ่มต้นแถวที่ 1 -->
                    <div data-role = "content" >
                       <form action = "#" method = "post" name = "jqmform" id="myformid">
                       <fieldset data-role = "controlgroup">
                       <legend></legend>
                        <input type = "radio" name = "volume" id ="r1" value = "unaltered"/>
                        <label for="r1">ไม่เปลี่ยนเเปลง</label>

                        <input type = "radio" name = "volume" id ="r2" value = "increase"/>
                        <label for="r2">มากกว่าปกติ</label>

                        <input type = "radio" name = "volume" id ="r3" value = "decrease"/>
                        <label for="r3">น้อยกว่าปกติ</label>
                        </fieldset>
                        </form>
	               </div>

	           ลักษณะอาหารที่ทานปัจจุบัน
                <select name ="select" id = "select-id" data-native-menu = "false">
                    <option>อาหารปกติเเต่ปริมาณลดลง</option>
                    <option>โจ๊กหรือข้าวต้ม</option>
                    <option>เฉพาะอาหารเหลว</option>
                    <option>ทานได้น้อยมากๆ</option>
                    <option>ได้รับอาหารทางสายให้อาหารหรืออาหารทางหลอดเลือดดำ</option>
                </select>

                <br>
                  <?php echo $_POST["test1"]; ?>
                  <input type="hidden" name="test" value=" <?php echo $_POST["test1"]; ?> ">
                  <input type="submit" name="Submit" value="บันทึก">
            </form>
				<br>					
						
      </ul>
      </div>	
            
		<div data-role="footer" data-position="fixed">
			<!--<h4>ฟุตเตอร์</h4>-->	
			<div data-role= "navbar">
                <ul>
                <li> <a href="welcome.php" >แบบประเมิน </a></li>
                <li> <a href="index.html" >ออกจากระบบ </a></li>
                </ul>
		    </div>
	   </div>
	
</body>	
</html>
