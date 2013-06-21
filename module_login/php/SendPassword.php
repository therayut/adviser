<? session_start(); ?>
<?
include ("../../connect.php");
include ("../../PHPMailer_v5.1/class.phpmailer.php");
$strSQL = "SELECT * FROM user WHERE username = '".$_POST[txtForgot]."' OR email = '".$_POST[txtForgot]."' ";	
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);	
		//***************************
      $mail = new PHPMailer(); // สร้าง object class ครับ
      $mail->IsSMTP(); // กำหนดว่าเป็น SMTP นะ
	  $mail->CharSet = "utf-8";
      $mail->Host = 'ssl://smtp.gmail.com'; // กำหนดค่าเป็นที่ gmail ได้เลยครับ
      $mail->Port = 465; // กำหนด port เป็น 465 ตามที่ google บอกครับ
      $mail->SMTPAuth = true; // กำหนดให้มีการตรวจสอบสิทธิ์การใช้งาน
      $mail->Username = 'skyblackyut@gmail.com'; // ต้องมีเมล์ของ gmail ที่สมัครไว้ด้วยนะครับ
      $mail->Password = 'yut2322533'; // ใส่ password ที่เราจะใช้เข้าไปเช็คเมล์ที่ gmail ล่ะครับ
      $mail->From = 'skyblackyut@gmail.com'; // ใครเป็นผู้ส่ง
      $mail->FromName = 'skyblackyut@gmail.com'; // ชื่อผู้ส่งสักนิดครับ
      $mail->Subject  = "คำร้องขอข้อมูลบัญชี adviser online"; // กำหนด subject ครับ
      $mail->Body     =  "ชื่อเข้าใช้งาน :"."$objResult[username]"."<br>"."รหัสผ่าน :"."$objResult[password]"."<br>"."อีเมล :"."$objResult[email]"; // ใส่ข้อความเข้าไปครับ
      $mail->AltBody =  "<br>";
      $mail->AddAddress($objResult["email"]); // ส่งไปที่ใครดีครับ 
      //****************************
		if($mail->Send())
		{
			echo "success";
		}
		else{
			echo "Error Save [".mysql_error()."]";
		}
?>