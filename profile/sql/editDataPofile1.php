<?
		include ("../../connect.php");
		$strSQL = "UPDATE user SET ";
		$strSQL .="username = '".$_POST["editUserName"]."' ";
		$strSQL .=",password = '".$_POST["editPassword"]."' ";
		$strSQL .=",email = '".$_POST["editEmail"]."' ";
		$strSQL .="WHERE userID = '".$_POST["userID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>