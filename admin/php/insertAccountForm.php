<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form id="idInsertAccountForm">
	<table align="center">
        <tr>
            <td>ชื่อเข้าใช้ระบบ: </td>
            <td><input type="text" name="insertUserName" /></td>
        </tr>        
        <tr>
            <td>รหัสผ่าน: </td>
            <td><input type="text"name="insertPassword" /></td>
        </tr>
        <tr>
            <td>รหัสประเภท: </td>
            <td><input type="text"name="insertUserTypeID"/></td>
        </tr>   
        <tr>
            <td>คณะ: </td>
            <td><input type="text"name="insertFaculty" /></td>
        </tr>
        <tr>
            <td>ภาควิชา: </td>
            <td><input type="text"name="insertDepartment" /></td>
        </tr>   
        <tr>
            <td>หลักสูตร: </td>
            <td><input type="text"name="insertMajor" /></td>
        </tr>
         <tr>
            <td>สถานะการใช้งาน: </td>
            <td>
            	<select name="insertActive">
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
		$("#idInsertAccountForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertAccount.php',$('#idInsertAccountForm').serialize(),function(response){
					if(response=="success"){
						alert("บันทึกเรียบร้อยแล้ว");
						window.location=window.location
					}
					else{
						alert(response);
						}
				});
      	});
});
</script>