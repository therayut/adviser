<?      
include("../../connect.php");
$strSQL = "DELETE FROM calendarmeet WHERE calendarID = '".$_POST["calendarID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบข่าวได้";
}
?>
