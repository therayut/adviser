<?
include ("../../connect.php");

$strSQL = "INSERT INTO faculty (FacultyID, FacultyName) VALUES ('".$_POST["insertFacultyID"]."', '".$_POST["insertFacultyName"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}

?>