<?
include('connect.php');
	$strSQL = "SELECT * FROM major INNER JOIN department ON major.DepartmentID = department.DepartmentID INNER JOIN faculty ON department.FacultyID = faculty.FacultyID";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<div style="border:1px solid #e5e5e5; width:380px;">
<form id="idRegisterForm">
	<table align="center" id="register" width="90%" border="0" style="margin-bottom:15px;"> 
    	<tr>
        	<td colspan="2" align="left" height="50"><label style="font-size:23px;font-weight:bold;color:#666;">สมัครสมาชิก</label></td>
        </tr>
    	<tr>
            <td width="300px;">ประเภท: </td>
        </tr>
    	<tr>
            <td>
            <select name="insertUserTypeID">
            	<option>---ประเภท---</option>
            	<option value="2">เจ้าหน้าที่</option>
                <option value="3">อาจารย์</option>
                <option value="4">นักศึกษา</option>
            </select>
            </td>
         </tr>
    	<tr>
            <td>ชื่อเข้าใช้งานระบบ: </td>
        </tr>
    	<tr>
            <td>
            <input type="text" name="insertUsername" />
            </td>
        </tr>
        <tr>
            <td>รหัสผ่าน: </td>
       	</tr>
    	<tr>
            <td>
            <input type="text" name="insertPassword" />
            </td>
     	</tr>
    	<tr>
            <td>ยืนยันรหัสผ่าน: </td>
        </tr>
    	<tr>
            <td>
            <input type="text" name="insertConPassword" />
            </td>
        </tr>
        <tr>
            <td>อีเมล์: </td>
        </tr>
    	<tr>
            <td colspan="2">
            <input type="text" name="insertEmail" size="35px;" />
            </td>
        </tr> 
        <tr>
        	<td></td>
       	</tr> 
        <tr>
            <td><input type="submit" value="submit" /><input type="reset" value="close" /></td>
        </tr>
        <tr>
        	<td colspan="4" align="center" style="color:#F00">*เมื่อสมัครสมาชิกเสร็จแล้วระบบจะทำการส่งข้อมูลให้กับเจ้าหน้าที่เพื่อให้สิทธิ์เข้าาใช้งาน</td>
        </tr>   
    </table>
</form>
</div>
<script language="javascript">
$(document).ready(function(){
		$("#idRegisterForm").submit(function(event) {
     			event.preventDefault();
				$.post('module_login/sql/register.php',$('#idRegisterForm').serialize(),function(response){
					if(response=="success"){
						alert("บันทึกเรียบร้อยแล้ว (กรุณายืนยันตัวตนทางอีเมล์ตามที่ท่านได้สมัครด้วยนะครับ)");
						window.location=window.location
					}
					else{
						alert(response);
						}
				});
      	});
});
</script>