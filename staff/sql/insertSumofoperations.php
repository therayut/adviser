<?
include ("../../connect.php");

$strSQL = "INSERT INTO sumofoperationsteacher (userID, FacultyID, title, problem, suggestion, term, year, date) VALUES ('".$_POST["insertUserID"]."', '".$_POST["insertFacultyID"]."', '".$_POST["insertTitle"]."', '".$_POST["insertProblem"]."', '".$_POST["insertSuggestion"]."', '".$_POST["insertTerm"]."', '".$_POST["insertYear"]."', '".$_POST["insertDate"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
?>