<?
		include ("../../connect.php");
		$strSQL = "UPDATE user SET ";
		$strSQL .="username = '".$_POST["editUserName"]."' ";
		$strSQL .=",password = '".$_POST["editPassword"]."' ";
		$strSQL .=",userTypeID = '".$_POST["editUserTypeID"]."' ";
		$strSQL .=",FacultyID = '".$_POST["editFaculty"]."' ";
		$strSQL .=",DepartmentID = '".$_POST["editDepartment"]."' ";
		$strSQL .=",MajorID = '".$_POST["editMajor"]."' ";
		$strSQL .=",name = '".$_POST["editName"]."' ";
		$strSQL .=",surname = '".$_POST["editSurname"]."' ";
		$strSQL .=",address = '".$_POST["editAddress"]."' ";
		$strSQL .=",phone = '".$_POST["editPhone"]."' ";
		$strSQL .=",email = '".$_POST["editEmail"]."' ";
		$strSQL .=",Active = '".$_POST["editActive"]."' ";
		$strSQL .=",identificationID = '".$_POST["editIdentificationID"]."' ";
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