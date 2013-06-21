<?
	include ("../../connect.php");
	$uID = $_GET[editUserID];
	$strSQL = "SELECT * FROM user WHERE userID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_dataPofile = mysql_fetch_array($objQuery);
?>
<form id="idEditDataPofile2Form">
	<table align="center"> 
  		<input type="hidden" name="userID" value="<?=$row_dataPofile[userID]?>">
        <tr>
            <td>คณะ: </td>
            <td><input type="text"name="editFaculty" value="<?=$row_dataPofile[FacultyID]?>" /></td>
        </tr>
        <tr>
            <td>ภาควิชา: </td>
            <td><input type="text"name="editDepartment" value="<?=$row_dataPofile[DepartmentID]?>" /></td>
        </tr>   
        <tr>
            <td>หลักสูตร: </td>
            <td><input type="text"name="editMajor" value="<?=$row_dataPofile[MajorID]?>" /></td>
        </tr>
       <tr>
            <td>ชื่อ: </td>
            <td><input type="text"name="editName" value="<?=$row_dataPofile[name]?>" /></td>
        </tr>
        <tr>
            <td>นามสกุล: </td>
            <td><input type="text"name="editSurname" value="<?=$row_dataPofile[surname]?>" /></td>
        </tr> 
        <tr>
            <td>รหัสบัตรประจำตัวประชาชน: </td>
            <td><input type="text"name="editIdentificationID" value="<?=$row_dataPofile[identificationID]?>" /></td>
        </tr>  
        <tr>
            <td>ที่อยู่: </td>
            <td><input type="text"name="editAddress" value="<?=$row_dataPofile[address]?>" /></td>
        </tr>    
  	</table>
 </form>