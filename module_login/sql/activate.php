<?
include ("../../connect.php");
	$strSQL = "SELECT * FROM user WHERE SID = '".trim($_GET['sid'])."' AND userID = '".trim($_GET['uid'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Activate Invalid !";
	}
	else
	{	
			$strSQL = "UPDATE user SET Active = 'Yes'  WHERE SID = '".trim($_GET['sid'])."' AND UserID = '".trim($_GET['uid'])."' ";
			$objQuery = mysql_query($strSQL);

		echo "Activate Successfully !";
	}

	mysql_close();
?>