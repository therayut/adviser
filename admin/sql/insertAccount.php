<?
include ("../../connect.php");

$strSQL = "INSERT INTO user (username, password, userTypeID, FacultyID, DepartmentID, MajorID, Active) VALUES ('".$_POST["insertUserName"]."', '".$_POST["insertPassword"]."', '".$_POST["insertUserTypeID"]."', '".$_POST["insertFaculty"]."', '".$_POST["insertDepartment"]."', '".$_POST["insertMajor"]."', '".$_POST["insertActive"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
?>