<?
include ("../../connect.php");

$strSQL = "INSERT INTO calendarMeet (userID, FacultyID, dateCalendar, year, detail) VALUES ('".$_POST["insertUserID"]."', '".$_POST["insertFacultyID"]."', '".$_POST["insertDate"]."', '".$_POST["insertYear"]."', '".$_POST["insertDetail"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
?>