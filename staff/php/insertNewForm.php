<? session_start(); ?>
<?
include('../../connect.php');
	$strSQL = "SELECT * FROM user INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<form id="idInsertNewForm">
	<table align="center">    
        <tr>
            <td>คณะ: </td>
            <td>
            <input type="text" value="<?= $objResult['FacultyName'] ?>" readonly />
            <input type="hidden" name="insertFacultyID" value="<?= $objResult['FacultyID'] ?>" />
            </td>
        </tr>
        <tr>
            <td>ผู้เขียนข่าว: </td>
            <td>
            <input type="text" value="<?= $objResult['name']."   ".$objResult['surname'] ?>" readonly />
            <input type="hidden" name="insertUserID" value="<?= $objResult['userID'] ?>" />
            </td>
        </tr>       
        <tr>
            <td>วันที่: </td>
            <td><input type="text"name="insertDate" /></td>
        </tr> 
        <tr>
            <td>หัวเรื่อง: </td>
            <td><input type="text"name="insertTitle" /></td>
        </tr>   
        <tr>
            <td>รายละเอียด: </td>
            <td><input type="text"name="insertDetail" /></td>
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