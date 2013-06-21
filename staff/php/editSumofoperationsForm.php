<?
	include ("../../connect.php");
	$uID = $_GET[SOTID];
	$strSQL = "SELECT * FROM sumofoperationsteacher INNER JOIN user ON sumofoperationsteacher.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE SOTID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_sumofoperations = mysql_fetch_array($objQuery);
?>

<form id="idEditSumofoperationsForm">
	<table align="center">   
   		 <tr>
            <td></td>
            <td>
            <input type="hidden" name="editSOTID" value="<?= $row_sumofoperations['SOTID'] ?>" />
            </td>
        </tr> 
        <tr>
            <td>คณะ: </td>
            <td>
            <input type="text" value="<?= $row_sumofoperations['FacultyName'] ?>" readonly />
            <input type="hidden" name="editFacultyID" value="<?= $row_sumofoperations['FacultyID'] ?>" />
            </td>
        </tr>
        <tr>
            <td>ผู้่จัดทำ: </td>
            <td>
            <input type="text" value="<?= $row_sumofoperations['name']."   ".$row_sumofoperations['surname'] ?>" readonly />
            <input type="hidden" name="editUserID" value="<?= $row_sumofoperations['userID'] ?>" />
            </td>
        </tr>       
        <tr>
            <td>วันที่: </td>
            <td><input type="text"name="editDate" value="<?= $row_sumofoperations['date'] ?>" /></td>
        </tr> 
        <tr>
            <td>ปีการศึกษา: </td>
            <td><input type="text"name="editYear" value="<?= $row_sumofoperations['year'] ?>" /></td>
        </tr>   
        <tr>
            <td>เทมอ: </td>
            <td><input type="text"name="editTerm" value="<?= $row_sumofoperations['term'] ?>" /></td>
        </tr>   
		<tr>
            <td>หัวเรื่อง: </td>
            <td><input type="text"name="editTitle" value="<?= $row_sumofoperations['title'] ?>" /></td>
        </tr> 
         <tr>
            <td>ปัญหาที่พบ: </td>
            <td><input type="text"name="editProblem" value="<?= $row_sumofoperations['problem'] ?>" /></td>
        </tr>
         <tr>
            <td>ข้อเสนอแนะ: </td>
            <td><input type="text"name="editSuggestion" value="<?= $row_sumofoperations['suggestion'] ?>"  /></td>
        </tr>     
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditCalendarForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/editCalendar.php',$('#idEditCalendarForm').serialize(),function(response){
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