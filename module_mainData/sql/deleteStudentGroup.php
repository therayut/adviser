<?      
include("../../connect.php");
$strSQL = "DELETE FROM studentgroup WHERE groupID = '".$_POST["GroupID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบหลักสูตรได้";
}
?>