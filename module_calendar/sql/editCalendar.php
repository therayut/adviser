<?
		include ("../../connect.php");
		$strSQL = "UPDATE calendarMeet SET ";
		$strSQL .="userID = '".$_POST["editUserID"]."' ";
		$strSQL .=",FacultyID = '".$_POST["editFacultyID"]."' ";
		$strSQL .=",dateCalendar = '".$_POST["editDate"]."' ";
		$strSQL .=",year = '".$_POST["editYear"]."' ";
		$strSQL .=",detail = '".$_POST["editDetail"]."' ";
		$strSQL .="WHERE calendarID = '".$_POST["editCalendarID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>