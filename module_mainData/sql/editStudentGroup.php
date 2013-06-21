<?
		include ("../../connect.php");
		$strSQL = "UPDATE studentGroup SET ";
		$strSQL .="year = '".$_POST["editYear"]."' ";
		$strSQL .=",groupName = '".$_POST["editGroupName"]."' ";
		$strSQL .=",studentInGroup = '".$_POST["editStudentInGroup"]."' ";
		$strSQL .=",teacherInGroup = '".$_POST["editTeacherInGroup"]."' ";
		$strSQL .="WHERE groupID = '".$_POST["editGroupID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>