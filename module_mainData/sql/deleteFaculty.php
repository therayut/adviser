<?      
include("../../connect.php");
$strSQL = "DELETE FROM faculty WHERE FacultyID = '".$_POST["FacultyID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบคณะได้";
}
?>