<?
include ("../../connect.php");
$strSQL = "INSERT INTO new (userID, dateNew, title, detail, FacultyID) VALUES ('".$_POST["insertUserID"]."', '".$_POST["insertDate"]."', '".$_POST["insertTitle"]."', '".$_POST["insertDetail"]."', '".$_POST["insertFacultyID"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
?>