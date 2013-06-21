<? session_start(); ?>
<?
include ("../../connect.php");
include ("../../PHPMailer_v5.1/class.phpmailer.php");
$strSQL = "INSERT INTO user (username, password, userTypeID, email, SID, Active) VALUES ('".$_POST["insertUsername"]."', '".$_POST["insertPassword"]."', '".$_POST["insertUserTypeID"]."', '".$_POST["insertEmail"]."','".session_id()."','No')";		
$objQuery = mysql_query($strSQL);
$Uid = mysql_insert_id();
		//***************************
      $mail = new PHPMailer(); // สร้าง object class ครับ
      $mail->IsSMTP(); // กำหนดว่าเป็น SMTP นะ
	  $mail->charSet = "UTF-8";
      $mail->Host = 'ssl://smtp.gmail.com'; // กำหนดค่าเป็นที่ gmail ได้เลยครับ
      $mail->Port = 465; // กำหนด port เป็น 465 ตามที่ google บอกครับ
      $mail->SMTPAuth = true; // กำหนดให้มีการตรวจสอบสิทธิ์การใช้งาน
      $mail->Username = 'skyblackyut@gmail.com'; // ต้องมีเมล์ของ gmail ที่สมัครไว้ด้วยนะครับ
      $mail->Password = 'yut2322533'; // ใส่ password ที่เราจะใช้เข้าไปเช็คเมล์ที่ gmail ล่ะครับ
      $mail->From = 'skyblackyut@gmail.com'; // ใครเป็นผู้ส่ง
      $mail->FromName = 'skyblackyut@gmail.com'; // ชื่อผู้ส่งสักนิดครับ
      $mail->Subject  = "ยื่อยันการใช้งาน adviser online"; // กำหนด subject ครับ
      $mail->Body     =  "คลิกที่ลิ้งเพื่อทำการยืนยันตัวตน"."<br>"."http://localhost/adviser8/module_login/sql/activate.php?sid=".session_id()."&uid=".$Uid."<br>"; // ใส่ข้อความเข้าไปครับ
      $mail->AltBody =  "http://localhost/adviser8/module_login/sql/activate.php?sid=".session_id()."&uid=".$Uid."<br>";
      $mail->AddAddress($_POST["insertEmail"]); // ส่งไปที่ใครดีครับ 
      //****************************
		if($mail->Send())
		{
			echo "success";
		}
		else{
			echo "Error Save [".mysql_error()."]";
		}
?>