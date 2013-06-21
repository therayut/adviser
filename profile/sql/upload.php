<?
		include ("../../connect.php");
		$strSQL = "UPDATE user SET ";
		$strSQL .="img = '".$_POST["editImgName"]."' ";
		$strSQL .="WHERE userID = '".$_POST["editUserID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>