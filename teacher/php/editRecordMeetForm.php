<?
	include ("../../connect.php");
	$uID = $_GET[recordMeetID];
	$strSQL = "SELECT * FROM recordmeet INNER JOIN user ON recordmeet.userID = user.userID WHERE recordMeetID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_recordmeet = mysql_fetch_array($objQuery);
?>

<form id="idEditRecordMeetForm">
	<table align="center">   
   		 <tr>
            <td></td>
            <td>
            <input type="hidden" name="editRecordMeetID" value="<?= $row_recordmeet['recordMeetID'] ?>" />
            </td>
        </tr> 
        <tr>
            <td>ผู้่จัดทำ: </td>
            <td>
            <input type="text" value="<?= $row_recordmeet['name']."   ".$row_recordmeet['surname'] ?>" readonly />
            <input type="hidden" name="editUserID" value="<?= $row_recordmeet['userID'] ?>" />
            </td>
        </tr>        
		<tr>
            <td>หัวเรื่อง: </td>
            <td><input type="text"name="editTitle" value="<?= $row_recordmeet['title'] ?>" /></td>
        </tr> 
         <tr>
            <td>ปัญหาที่พบ: </td>
            <td><input type="text"name="editProblem" value="<?= $row_recordmeet['problem'] ?>" /></td>
        </tr>
         <tr>
            <td>ข้อเสนอแนะ: </td>
            <td><input type="text"name="editSuggestion" value="<?= $row_recordmeet['suggestion'] ?>"  /></td>
        </tr>  
        <tr>
            <td>นักศึกษาที่พบ: </td>
            <td><input type="text"name="editStudent" value="<?= $row_recordmeet['student'] ?>" /></td>
        </tr>    
        <tr>
            <td>วันที่: </td>
            <td><input type="text"name="editDate" value="<?= $row_recordmeet['date'] ?>" /></td>
        </tr> 
        <tr>
            <td>เทมอ: </td>
            <td><input type="text"name="editTerm" value="<?= $row_recordmeet['term'] ?>" /></td>
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