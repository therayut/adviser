<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form id="idInsertFacultyForm">
	<table align="center">
        <tr>
            <td>รหัส: </td>
            <td><input type="text" name="insertFacultyID" /></td>
        </tr>        
        <tr>
            <td>ชื่อ: </td>
            <td><input type="text" name="insertFacultyName" /></td>
        </tr>      
    </table>
    <br>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertFacultyForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertFaculty.php',$('#idInsertFacultyForm').serialize(),function(response){
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