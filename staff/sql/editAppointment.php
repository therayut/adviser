<?
		include ("../../connect.php");
		$strSQL = "UPDATE appointmentdoc SET ";
		$strSQL .="FacultyID = '".$_POST["editFacultyID"]."' ";
		$strSQL .=",numberDoc = '".$_POST["editNumberDoc"]."' ";
		$strSQL .=",title = '".$_POST["editTitle"]."' ";
		$strSQL .=",year = '".$_POST["editYear"]."' ";
		$strSQL .=",detail = '".$_POST["editDetail"]."' ";
		$strSQL .=",dateDoc = '".$_POST["editDate"]."' ";
		$strSQL .=",userID = '".$_POST["editStaffID"]."' ";
		$strSQL .="WHERE appointmentDocID = '".$_POST["editAppointmentID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>