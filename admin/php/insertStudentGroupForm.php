<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM major INNER JOIN department ON major.DepartmentID = department.DepartmentID INNER JOIN faculty ON department.FacultyID = faculty.FacultyID WHERE MajorID = '$_GET[MajorID]' LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	
?>
<form id="idInsertStudentGroupForm">
	<table align="center">        
        <tr>
            <td align="right">คณะ :</td>
            <td><?=$row[FacultyName]?><input name="insertFacultyID" type="hidden" value="<?=$row[FacultyID]?>" /></td>
        </tr>           
        <tr>
            <td  align="right">ภาควิชา :</td>
            <td><?=$row[DepartmentName]?><input name="insertDepartmentID" type="hidden" value="<?=$row[DepartmentID]?>" /></td>
        </tr>
        <tr>
            <td  align="right">หลักสูตร :</td>
            <td><?=$row[MajorName]?><input name="insertMajorID" type="hidden" value="<?=$row[MajorID]?>" /></td>
        </tr>                
        <tr>
            <td  align="right">ปีเข้าศึกษา :</td>
            <td><input type="text" name="insertYearGroup" /></td>
        </tr>        
        <tr>
            <td  align="right">ชื่อกลุ่ม :</td>
            <td><input type="text" name="insertStudentGroupName" /></td>
        </tr>   
        <tr>
            <td  align="right">นักศึกษาในกลุ่ม :</td>
            <td><input type="text" name="insertStudentInGroup" /></td>
        </tr>  
        <tr>
            <td  align="right">อาจารย์ประจำกลุ่ม :</td>
            <td><input type="text" name="insertTeacherInGroup" /></td>
        </tr>             
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertStudentGroupForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertStudentGroup.php',$('#idInsertStudentGroupForm').serialize(),function(response){
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


