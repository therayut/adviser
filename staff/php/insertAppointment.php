<? session_start(); ?>
<?
include('connect.php');
	$strSQL = "SELECT * FROM user INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<form id="idInsertAppointmentForm" style="margin-top:20px; margin-left:20px;">
	<table align="center">    
        <tr>
            <td>ชื่อคณะ: </td>
            <td><?= $objResult['FacultyName'] ?>
            <input type="hidden" name="insertFacultyID" value="<?= $objResult['FacultyID'] ?>" />
            </td>
        </tr>
        <tr>
            <td>เลขที่เอกสาร: </td>
            <td><input style="width:200px;" type="text"name="insertNumberDoc" /></td>
        </tr>   
        <tr>
            <td>ปีการศึกษา: </td>
            <td><input style="width:200px;" type="text"name="insertYear" /></td>
        </tr>   
        <tr>
            <td>หัวเรื่อง: </td>
            <td><input style="width:400px;" type="text"name="insertTitle" /></td>
        </tr>
        <tr>
            <td>รายละเอียด: </td>
            <td><textarea name="insertDetail"></textarea></td>
        </tr>
       <tr>
            <td>วันที่: </td>
            <td><input type="text" id="datepicker"name="insertDate"/><input type="text" value="<?=$_GET['$time'] ?>" /></td>
        </tr>
        <tr>
            <td>เจ้าหน้าผู้จัดทำ: </td>
            <td><input type="text" value="<?= $objResult['name']."   ".$objResult['surname'] ?>" readonly />
            <input type="hidden" name="insertStaffID" value="<?= $objResult['userID'] ?>" />
            </td>
        </tr>   
        <tr>
        	<td></td>
            <td><input type="submit" value="submit" /><input type="reset"  value="clear"/></td>
        </tr>  
    </table>
    <br>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertAppointmentForm").submit(function(event) {
     			event.preventDefault();
				$.post('staff/sql/insertAppointment.php',$('#idInsertAppointmentForm').serialize(),function(response){
					if(response=="success"){
						alert("บันทึกเรียบร้อยแล้ว");
						window.location=window.location
					}
					else{
						alert(response);
						}
				});
      	});
		$("#datepicker").change(function(event){
					$testDate = $_GET["insertDate"];
					$time =explode("/",$testDate);
					krsort($time);
					alert (implode("-",$time));
		});
});
</script>