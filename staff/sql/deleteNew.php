<?      
include("../../connect.php");
$strSQL = "DELETE FROM new WHERE newID = '".$_POST["newID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบข่าวได้";
}
?>
