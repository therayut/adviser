<?
		include ("../../connect.php");
		$strSQL = "UPDATE sumofoperationsteacher SET ";
		$strSQL .="userID = '".$_POST["editUserID"]."' ";
		$strSQL .=",FacultyID = '".$_POST["editFacultyID"]."' ";
		$strSQL .=",date = '".$_POST["editDate"]."' ";
		$strSQL .=",year = '".$_POST["editYear"]."' ";
		$strSQL .=",title = '".$_POST["editTitle"]."' ";
		$strSQL .=",term = '".$_POST["editTerm"]."' ";
		$strSQL .=",problem = '".$_POST["editProblem"]."' ";
		$strSQL .=",suggestion = '".$_POST["editSuggestion"]."' ";
		$strSQL .="WHERE SOTID = '".$_POST["editSOTID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>