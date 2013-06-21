<?
include ("../../connect.php");

$strSQL = "INSERT INTO department (DepartmentID, DepartmentName, FacultyID) VALUES ('".$_POST["insertDepartmentID"]."', '".$_POST["insertDepartmentName"]."', '".$_POST["insertFacultyID"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}

?>