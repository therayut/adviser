<?      
include("../../connect.php");
$strSQL = "DELETE FROM recordmeet WHERE recordMeetID = '".$_POST["recordMeetID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบผู้ใช้งานได้";
}
?>