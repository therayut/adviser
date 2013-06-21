<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM faculty WHERE FacultyID = $_GET[FacultyID] LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
?>
<form id="idInsertDepartmentForm">
	<table align="center">      
        <tr>
            <td>ชื่อคณะ :</td>            
            <td><?=$row[FacultyName]?><input type="hidden" value="<?=$row[FacultyID]?>" name="insertFacultyID" /></td>
        </tr>    
    
        <tr>
            <td>รหัส :</td>
            <td><input type="text" name="insertDepartmentID" /></td>
        </tr>        
        <tr>
            <td>ชื่อ :</td>
            <td><input type="text" name="insertDepartmentName" /></td>
        </tr>             
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertDepartmentForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertDepartment.php',$('#idInsertDepartmentForm').serialize(),function(response){
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