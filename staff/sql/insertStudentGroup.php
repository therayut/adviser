<?
include ("../../connect.php");

$strSQL = "INSERT INTO studentGroup (year, groupName, studentInGroup, teacherInGroup, MajorID, DepartmentID, FacultyID) VALUES ('".$_POST["insertYearGroup"]."', '".$_POST["insertStudentGroupName"]."', '".$_POST["insertStudentInGroup"]."', '".$_POST["insertTeacherInGroup"]."', '".$_POST["insertMajorID"]."', '".$_POST["insertDepartmentID"]."', '".$_POST["insertFacultyID"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}

?>