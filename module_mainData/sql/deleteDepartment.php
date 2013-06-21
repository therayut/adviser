<?      
include("../../connect.php");
$strSQL = "DELETE FROM department WHERE DepartmentID = '".$_POST["DepartmentID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบภาควิชาได้";
}
?>