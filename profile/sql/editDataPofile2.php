<?
		include ("../../connect.php");
		$strSQL = "UPDATE user SET ";
		$strSQL .="FacultyID = '".$_POST["editFaculty"]."' ";
		$strSQL .=",DepartmentID = '".$_POST["editDepartment"]."' ";
		$strSQL .=",MajorID = '".$_POST["editMajor"]."' ";
		$strSQL .=",name = '".$_POST["editName"]."' ";
		$strSQL .=",surname = '".$_POST["editSurname"]."' ";
		$strSQL .=",address = '".$_POST["editAddress"]."' ";
		$strSQL .=",identificationID = '".$_POST["editIdentificationID"]."' ";
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