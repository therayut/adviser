<?      
include("../../connect.php");
$strSQL = "DELETE FROM major WHERE MajorID = '".$_POST["MajorID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบหลักสูตรได้";
}
?>