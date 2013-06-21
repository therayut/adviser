<?      
include("../../connect.php");
$strSQL = "DELETE FROM sumofoperationsteacher WHERE SOTID = '".$_POST["SOTID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบปฏิทินได้";
}
?>
