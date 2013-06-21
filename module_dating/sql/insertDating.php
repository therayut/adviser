<? session_start(); ?>
<?
include ("../../connect.php");
		$strSQL = "INSERT INTO detailDating (title, detail) VALUES ('".$_POST["textTitle"]."', '".strip_tags($_POST["textDetail"])."')";		
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo "success";
		}
	
		$string = $_POST["textUserRecipients"];
		$array = explode(",", $string);

		
		$strSQL2 = "SELECT MAX(datingID) AS datingID FROM detaildating";
		$objQuery2 = mysql_query($strSQL2);
		$row = mysql_fetch_array($objQuery2);
		for($i=0; $i<count($array); $i++){
				$strSQL = "INSERT INTO dating (datingID,userSender, userRecipient) VALUES ('".$row[datingID]."', '".$_POST["textUserSender"]."', '".$array[$i]."' )";
				$objQuery = mysql_query($strSQL);
				if(!$objQuery)
				{
					echo "Error Save [".mysql_error()."]";
				}
				else{
					echo "success";
				}
		}
?>
