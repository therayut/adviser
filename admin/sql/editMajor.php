<?
		include ("../../connect.php");
		$strSQL = "UPDATE major SET ";
		$strSQL .="MajorID = '".$_POST["editMajorID"]."' ";
		$strSQL .=",MajorName = '".$_POST["editMajorName"]."' ";
		$strSQL .="WHERE MajorID = '".$_POST["editMajorID"]."' ";
		$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Update [".mysql_error()."]";
		}
		else{
			echo "success";
			}
		
?>