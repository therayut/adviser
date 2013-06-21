<form id="idInsertNewForm">
	<table align="center">    
        <tr>
            <td>ชื่อ: </td>
            <td><input type="text"name="insertName" /></td>
        </tr>   
        <tr>
            <td>ไฟล์: </td>
            <td><input type="file"name="insertFile" /></td>
        </tr> 
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertNewForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertNew.php',$('#idInsertNewForm').serialize(),function(response){
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