<?
include ("../../connect.php");
$strSQL = "SET DATEFORMAT YMD";
$strSQL = "INSERT INTO appointmentDoc (FacultyID, numberDoc, title, year, detail, dateDoc, userID) VALUES ('".$_POST["insertFacultyID"]."', '".$_POST["insertNumberDoc"]."', '".$_POST["insertTitle"]."', '".$_POST["insertYear"]."', '".$_POST["insertDetail"]."', '".$_POST["insertDate"]."', '".$_POST["insertStaffID"]."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo $_POST["insertDate"];
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
?>