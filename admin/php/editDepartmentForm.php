<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM department INNER JOIN faculty ON department.FacultyID = faculty.FacultyID WHERE DepartmentID = '$_GET[DepartmentID]' LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	
?>
<form id="idEditDepartmentForm">
	<table align="center">       
        <tr>
            <td align="right">ชื่อคณะ :</td>            
            <td><?=$row[FacultyName]?></td>
        </tr>    
    
        <tr>
            <td align="right">รหัส :</td>
            <td><?=$row[DepartmentID]?><input type="hidden" name="editDepartmentID" value="<?=$row[DepartmentID]?>" /></td>
        </tr>        
        <tr>
            <td align="right">ชื่อ :</td>
            <td><input type="text" name="editDepartmentName" value="<?=$row[DepartmentName]?>"/></td>
        </tr>           
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditDepartmentForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editDepartment.php',$('#idEditDepartmentForm').serialize(),function(response){
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