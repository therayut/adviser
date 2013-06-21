<?
	include ("../../connect.php");
	$uID = $_GET[newID];
	$strSQL = "SELECT * FROM new INNER JOIN user ON new.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE newID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_new = mysql_fetch_array($objQuery);
?>

<form id="idEditNewForm">
	<table align="center">   
   		 <tr>
            <td></td>
            <td>
            <input type="hidden" name="editNewID" value="<?= $row_new['newID'] ?>" />
            </td>
        </tr> 
        <tr>
            <td>คณะ: </td>
            <td>
            <input type="text" value="<?= $row_new['FacultyName'] ?>" readonly />
            <input type="hidden" name="editFacultyID" value="<?= $row_new['FacultyID'] ?>" />
            </td>
        </tr>
        <tr>
            <td>ผู้เขียนข่าว </td>
            <td>
            <input type="text" value="<?= $row_new['name']."   ".$row_new['surname'] ?>" readonly />
            <input type="hidden" name="editUserID" value="<?= $row_new['userID'] ?>" />
            </td>
        </tr>       
        <tr>
            <td>วันที่: </td>
            <td><input type="text"name="editDate" value="<?= $row_new['dateNew'] ?>" /></td>
        </tr> 
        <tr>
            <td>หัวเรื่อง: </td>
            <td><input type="text"name="editTitle" value="<?= $row_new['title'] ?>" /></td>
        </tr>   
        <tr>
            <td>รายละเอียด: </td>
            <td><input type="text"name="editDetail" value="<?= $row_new['detail'] ?>" /></td>
        </tr>   
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditNewForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editNew.php',$('#idEditNewForm').serialize(),function(response){
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