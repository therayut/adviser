<?
		include ("../../connect.php");
		$strSQL = "UPDATE recordmeet SET ";
		$strSQL .="userID = '".$_POST["editUserID"]."' ";
		$strSQL .=",date = '".$_POST["editDate"]."' ";
		$strSQL .=",student = '".$_POST["editStudent"]."' ";
		$strSQL .=",title = '".$_POST["editTitle"]."' ";
		$strSQL .=",term = '".$_POST["editTerm"]."' ";
		$strSQL .=",problem = '".$_POST["editProblem"]."' ";
		$strSQL .=",suggestion = '".$_POST["editSuggestion"]."' ";
		$strSQL .="WHERE recordMeetID = '".$_POST["editRecordMeetID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>