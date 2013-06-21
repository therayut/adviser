<?
include ("../../connect.php");

$strSQL = "INSERT INTO major (MajorID, MajorName, DepartmentID, FacultyID) VALUES ('".$_POST["insertMajorID"]."', '".$_POST["insertMajorName"]."', '".$_POST["insertDepartmentID"]."', '".$_POST["insertFacultyID"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}

?>