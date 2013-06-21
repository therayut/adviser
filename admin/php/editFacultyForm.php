<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include("../../connect.php");
	$strSQL = "SELECT * FROM faculty WHERE FacultyID = '$_GET[FacultyID]' LIMIT 1";
	$objQuery = mysql_query($strSQL);
	$row = mysql_fetch_array($objQuery);
	
?>
<form id="idEditFacultyForm">
	<table align="center">       
        <tr>
            <td align="right">รหัส :</td>
            <td><?=$row[FacultyID]?><input type="hidden" name="editFacultyID" value="<?=$row[FacultyID]?>" /></td>
        </tr>        
        <tr>
            <td align="right">ชื่อ :</td>
            <td><input type="text" name="editFacultyName" value="<?=$row[FacultyName]?>"/></td>
        </tr>          
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditFacultyForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editFaculty.php',$('#idEditFacultyForm').serialize(),function(response){
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