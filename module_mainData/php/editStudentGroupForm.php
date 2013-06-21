<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM studentGroup INNER JOIN  major ON studentGroup.MajorID = major.MajorID INNER JOIN department ON major.DepartmentID = department.DepartmentID INNER JOIN faculty ON department.FacultyID=faculty.FacultyID WHERE groupID = '$_GET[GroupID]' LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	
?>
<form id="idEditStudentGroupForm">
	<table align="center">      
        <tr>
            <td align="right">ชื่อคณะ :</td>            
            <td><?=$row[FacultyName]?></td>
        </tr>    
        <tr>
            <td align="right">ชื่อภาควิชา :</td>            
            <td><?=$row[DepartmentName]?></td>
        </tr>   
        <tr>
            <td align="right">ชื่อหลักสูตร :</td>            
            <td><?=$row[MajorName]?></td>
        </tr>       
        <input type="hidden" name="editGroupID" value="<?=$row[groupID]?>" />
        <tr>
            <td align="right">ปีเข้าศึกษา :</td>
            <td><?=$row[year]?><input name="editYear" type="hidden" value="<?=$row[year]?>" /></td>
        </tr>        
        <tr>
            <td align="right">ชื่อกลุ่ม :</td>
            <td><input type="text" name="editGroupName" value="<?=$row[groupName]?>"/></td>
		<tr>
        <tr>
            <td align="right">นักศึกษาในกลุ่ม :</td>
            <td><input type="text" name="editStudentInGroup" value="<?=$row[studentInGroup]?>"/></td>
		<tr>
        <tr>
            <td align="right">อาจารย์ที่ปรึกษา :</td>
            <td><input type="text" name="editTeacherInGroup" value="<?=$row[teacherInGroup]?>"/></td>
        </tr>                
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditStudentGroupForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editStudentGroup.php',$('#idEditStudentGroupForm').serialize(),function(response){
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