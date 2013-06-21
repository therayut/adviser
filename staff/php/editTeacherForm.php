<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include ("../../connect.php");
	$uID = $_GET[userID];
	$strSQL = "SELECT * FROM user WHERE userID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_Account = mysql_fetch_array($objQuery);
?>

<form id="idEditTeacherForm">
	<table align="center">
    	<tr>
            <td>รหัสสมาชิก: </td>
            <td><input type="text" name="editUserID" value="<?=$row_Account[userID]?>" readonly /></td>
        </tr>    
        <tr>
            <td>ชื่อเข้าใช้ระบบ: </td>
            <td><input type="text" name="editUserName" value="<?=$row_Account[username]?>"/></td>
        </tr>        
        <tr>
            <td>รหัสผ่าน: </td>
            <td><input type="text"name="editPassword" value="<?=$row_Account[password]?>" /></td>
        </tr>
        <tr>
            <td>รหัสประเภท: </td>
            <td><input type="text"name="editUserTypeID" value="<?=$row_Account[userTypeID]?>"/></td>
        </tr>   
        <tr>
            <td>คณะ: </td>
            <td><input type="text"name="editFaculty" value="<?=$row_Account[FacultyID]?>" /></td>
        </tr>
        <tr>
            <td>ภาควิชา: </td>
            <td><input type="text"name="editDepartment" value="<?=$row_Account[DepartmentID]?>" /></td>
        </tr>   
        <tr>
            <td>หลักสูตร: </td>
            <td><input type="text"name="editMajor" value="<?=$row_Account[MajorID]?>" /></td>
        </tr>
        <tr>
            <td>สถานะการใช้งาน: </td>
            <td>
            	<select name="editActive" value="<?=$row_Account[Active]?>">
                	<option value="YES">YES</option>
                    <option value="NO">NO</option>
            	</select>
            </td>
        </tr>     
    </table>
    <br>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditAccountForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editAccount.php',$('#idEditAccountForm').serialize(),function(response){
					if(response=="success"){
						alert("แก้ไขเรียบร้อยแล้ว");
						window.location=window.location
					}
					else{
						alert(response);
						}
				});
      	});
});
</script>