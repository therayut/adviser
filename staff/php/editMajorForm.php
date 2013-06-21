<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM major INNER JOIN department ON major.DepartmentID = department.DepartmentID INNER JOIN faculty ON department.FacultyID=faculty.FacultyID WHERE MajorID = '$_GET[MajorID]' LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	
?>
<form id="idEditMajorForm">
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
            <td align="right">รหัส :</td>
            <td><?=$row[MajorID]?><input name="editMajorID" type="hidden" value="<?=$row[MajorID]?>" /></td>
        </tr>        
        <tr>
            <td align="right">ชื่อหลักสูตร :</td>
            <td><input type="text" name="editMajorName" value="<?=$row[MajorName]?>"/></td>     
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditMajorForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editMajor.php',$('#idEditMajorForm').serialize(),function(response){
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