<?
	include ("../../connect.php");
	$uID = $_GET[appointmentID];
	$strSQL = "SELECT * FROM appointmentdoc INNER JOIN user ON appointmentdoc.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE appointmentDocID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_appointment = mysql_fetch_array($objQuery);	
?>

<form id="idEditAppointmentForm">
	<table align="center">    
    <?=$_GET[appointmentID]."aaaa"; ?>
       <tr>
            <td>รหัสหนังสือแต่งตั้ง: </td>
            <td><input type="text"  name="editAppointmentID"  value="<?=$row_appointment[appointmentDocID]; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
            <td>รหัสคณะ: </td>
            <td><input type="hidden"  name="editFacultyID"  value="<?=$row_appointment[FacultyID]; ?>" />
            <input type="text" value="<?=$row_appointment[FacultyName]; ?>" readonly="readonly" />
            </td>
        </tr>
        <tr>
            <td>เลขที่เอกสาร: </td>
            <td><input type="text"name="editNumberDoc" value="<?=$row_appointment[numberDoc]; ?>" /></td>
        </tr>   
        <tr>
            <td>หัวเรื่อง: </td>
            <td><input type="text"name="editTitle" value="<?=$row_appointment[title]; ?>" /></td>
        </tr>
        <tr>
            <td>ปีการศึกษา: </td>
            <td><input type="text"name="editYear" value="<?=$row_appointment[year]; ?>" /></td>
        </tr>   
        <tr>
            <td>รายละเอียด: </td>
            <td><input type="text"name="editDetail" value="<?=$row_appointment[detail]; ?>" /></td>
        </tr>
       <tr>
            <td>วันที่: </td>
            <td><input type="text"name="editDate" value="<?=$row_appointment[dateDoc]; ?>" /></td>
        </tr>
        <tr>
            <td>เจ้าหน้าที่จัดทำ: </td>
            <td><input type="text" value="<?=$row_appointment[name]."   ".$row_appointment[surname] ?>" readonly="readonly"/>
            <input type="hidden" name="editStaffID" value="<?=$row_appointment[userID]; ?>">
            </td>
        </tr>        
    </table>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idEditAppointmentForm").submit(function(event) {
     			event.preventDefault();
				$.post('staff/sql/editAppointment.php',$('#idEditAppointmentForm').serialize(),function(response){
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
