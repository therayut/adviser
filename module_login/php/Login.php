<?
	session_start();
	include("../../connect.php");
	$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['username'])."' 
	and password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["userID"] = $objResult["userID"];
			$_SESSION["userTypeID"] = $objResult["userTypeID"];
			$_SESSION["FacultyID"] = $objResult["FacultyID"];
			$_SESSION["DepartmentID"] = $objResult["DepartmentID"];
			$_SESSION["MajorID"] = $objResult["MajorID"];
			session_write_close();
			header("location:../../home.php?mod=mainPage");
	}
	mysql_close();
?>