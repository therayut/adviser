<?      
include("../../connect.php");
$strSQL = "DELETE FROM appointmentdoc WHERE appointmentDocID = '".$_POST["appointmentID"]."' ";
if(mysql_query($strSQL)){
	echo "success";
}else{
	echo "ไม่สามารถลบคณะได้";
}
?>