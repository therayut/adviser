<?
	include ("connect.php");
	$uID = $_GET[calendarID];
	$strSQL = "SELECT * FROM calendarMeet INNER JOIN user ON calendarMeet.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE calendarID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_calendar = mysql_fetch_array($objQuery);
?>
<div style="min-height:500px;border:1px solid #e5e5e5; margin-left:10px; ">
<table style="width:630px; float:left">
    <tr>
        <td colspan="2" align="center" style="padding-bottom:10px;">
            ข้อมูลปฏิทิน
        </td>
    </tr>
     <tr>
            <td style="min-width:310px;"></td>
            <td style="min-width:310px;"></td>
        </tr>
        <tr>
            <td align="right">คณะ: </td>
            <td>&nbsp;&nbsp;<?= $row_calendar['FacultyName'] ?></td>
        </tr>
        <tr>
            <td align="right">ผู้่จัดทำ: </td>
            <td>&nbsp;&nbsp;<?= $row_calendar['name']."   ".$row_calendar['surname'] ?></td>
        </tr>       
        <tr>
            <td align="right">วันที่: </td>
            <td>&nbsp;&nbsp;<?= $row_calendar['dateCalendar'] ?></td>
        </tr> 
        <tr>
            <td align="right">ปีการศึกษา: </td>
            <td>&nbsp;&nbsp;<?= $row_calendar['year'] ?></td>
        </tr>   
        <tr>
            <td align="right">รายละเอียด: </td>
            <td>&nbsp;&nbsp;<?= $row_calendar['detail'] ?></td>
        </tr>   
    </table>
</div>