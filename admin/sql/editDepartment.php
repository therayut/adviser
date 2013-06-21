<?
		include ("../../connect.php");
		$strSQL = "UPDATE department SET ";
		$strSQL .="DepartmentID = '".$_POST["editDepartmentID"]."' ";
		$strSQL .=",DepartmentName = '".$_POST["editDepartmentName"]."' ";
		$strSQL .="WHERE DepartmentID = '".$_POST["editDepartmentID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>