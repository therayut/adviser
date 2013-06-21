<?      
include("../../connect.php");
$strSQL = "DELETE FROM user WHERE userID = '".$_POST["userID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบผู้ใช้งานได้";
}
?>