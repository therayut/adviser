<?
	include ("../../connect.php");
	$uID = $_GET[calendarID];
	$strSQL = "SELECT * FROM calendarMeet INNER JOIN user ON calendarMeet.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE calendarID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_calendar = mysql_fetch_array($objQuery);
?>

<form id="idEditCalendarForm">
	<table align="center">   
   		 <tr>
            <td></td>
            <td>
            <input type="hidden" name="editCalendarID" value="<?= $row_calendar['calendarID'] ?>" />
            </td>
        </tr> 
        <tr>
            <td>คณะ: </td>
            <td>
            <input type="text" value="<?= $row_calendar['FacultyName'] ?>" readonly />
            <input type="hidden" name="editFacultyID" value="<?= $row_calendar['FacultyID'] ?>" />
            </td>
        </tr>
        <tr>
            <td>ผู้่จัดทำ: </td>
            <td>
            <input type="text" value="<?= $row_calendar['name']."   ".$row_calendar['surname'] ?>" readonly />
            <input type="hidden" name="editUserID" value="<?= $row_calendar['userID'] ?>" />
            </td>
        </tr>       
        <tr>
            <td>วันที่: </td>
            <td><input type="text"name="editDate" value="<?= $row_calendar['dateCalendar'] ?>" /></td>
        </tr> 
        <tr>
            <td>ปีการศึกษา: </td>
            <td><input type="text"name="editYear" value="<?= $row_calendar['year'] ?>" /></td>
        </tr>   
        <tr>
            <td>รายละเอียด: </td>
            <td><input type="text"name="editDetail" value="<?= $row_calendar['detail'] ?>" /></td>
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