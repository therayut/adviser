<?
		include ("../../connect.php");
		$strSQL = "UPDATE faculty SET ";
		$strSQL .="FacultyName = '".$_POST["editFacultyName"]."' ";
		$strSQL .="WHERE FacultyID = '".$_POST["editFacultyID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>