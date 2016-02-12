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
			<a href="frm2.php"> ย้อนกลับ  </a>	
			<a href="frm4.php"> ต่อไป </a>
			<h1>อาการ</h1>	
			<table  align = "center">
                      <!--เริ่มต้นแถวที่ 1 -->
                      <tr>
					 <td> หน้าที่ 3 จาก  </td>
					  <td><a href="userpage.php" data-ajax="false"style="text-align:center;"> 1 </td>
                           <td><a href="frm2.php" data-ajax="false"style="text-align:center;"> 2 </a></td>
                           <td> 3 </td>
						   <td><a href="frm4.php" data-ajax="false"style="text-align:center;"> 4 </a> </td>
                      </tr> 
		   
		   </table>
					
		</div>
        
		<div data-role="content">						
		<ul data-role="listview" data-inset="true">
            <form action="phpSQLServerAddSave4.php" name="frmAdd" method="post">
                &nbsp;ปัจจัยที่ทานอาหารได้ไม่เพียงพอในช่วง 2 สัปดาห์ที่ผ่านมา
                <select name ="select" id = "select-id" data-native-menu = "false">
                    <option value="test">ไม่มีปัญหาเรื่องการทานอาหาร</option>
                    <option value="test">คลื่นไส้</option>
                    <option value="test">ท้องผูก</option>
                    <option value="test">ริมฝีปากแห้ง</option>
                    <option value="test">กลิ่นอาหารรบกวน</option>
                    <option value="test">รู้สีกอิ่มเร็วกว่าปกติ</option>
                    <option value="test">การรับรสผิดปกติหรือไม่รู้รสชาติ</option>
                    <option value="test">เจ็บปาก</option>
                    <option value="test">ปัญหาเกี่ยวกับการกลืน</option>
                    <option value="test">ไม่หิว ไม่อยากทานอาหาร</option>
                    <option value="test">อาเจียน</option>
                    <option value="test">ท้องเสีย</option>
                </select>

	           <div data-role="content">
			     <label for="select-id2">อาการปวด</label>
                    <select name="select2" id="select-id2" data-native-menu="false" multiple="multiple">
                        <optgroup label="ต่ำเเหน่งของร่างกาย">
                            <option>เลือกอาการปวด</option>
                            <option value="head">หัว</option>
                            <option value="neck">คอ</option>
                            <option value="elbow">ไหล่</option>
                            <option value="arm">เเขน</option>
                            <option value="back">หลัง</option>
                            <option value="waist">เอว</option>
                            <option value="leg">ขา</option>
                            <option value="hip">สะโพก</option>
                        </optgroup>
                    </select>		
		      </div>			
                &nbsp;อื่นๆ	
                    <input name="txtOthers" type="text" id="txtOthers" >
                <br>
                <?php
                $username = $_GET["Name"];
                echo $_GET["Name"]."<br>";
                //echo $username;
                //<a href="userpage.php?id=1">Book 1</a>
                ?>
                
                  <input type="hidden" name="test" value=" <?php echo $_POST["test"]; ?> ">
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
