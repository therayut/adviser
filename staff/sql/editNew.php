<?
		include ("../../connect.php");
		$strSQL = "UPDATE new SET ";
		$strSQL .="userID = '".$_POST["editUserID"]."' ";
		$strSQL .=",dateNew = '".$_POST["editDate"]."' ";
		$strSQL .=",title = '".$_POST["editTitle"]."' ";
		$strSQL .=",detail = '".$_POST["editDetail"]."' ";
		$strSQL .=",FacultyID = '".$_POST["editFacultyID"]."' ";	
		$strSQL .="WHERE newID = '".$_POST["editNewID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>