<?
include ("../../connect.php");

$strSQL = "INSERT INTO recordmeet (userID, title, problem, suggestion, student, term, date) VALUES ('".$_POST["insertUserID"]."', '".$_POST["insertTitle"]."', '".$_POST["insertProblem"]."', '".$_POST["insertSuggestion"]."', '".$_POST["insertStudent"]."', '".$_POST["insertTerm"]."', '".$_POST["insertDate"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
?>