<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM department INNER JOIN faculty ON department.FacultyID = faculty.FacultyID WHERE DepartmentID = '$_GET[DepartmentID]' LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	
?>
<form id="idInsertMajorForm">
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
            <td  align="right">รหัส :</td>
            <td><input type="text" name="insertMajorID" /></td>
        </tr>        
        <tr>
            <td  align="right">ชื่อ :</td>
            <td><input type="text" name="insertMajorName" /></td>
        </tr>            
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertMajorForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertMajor.php',$('#idInsertMajorForm').serialize(),function(response){
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


