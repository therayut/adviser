<?
	include ("connect.php");
	$uID = $_GET[appointmentID];
	$strSQL = "SELECT * FROM appointmentDoc INNER JOIN user ON appointmentDoc.userID = user.userID WHERE appointmentDocID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_appointment = mysql_fetch_array($objQuery);
?>

<form id="ideditAppointmentForm">
<div style="min-height:500px;border:1px solid #e5e5e5; margin-left:10px; ">
	<table style="width:630px; float:left">    
      <tr>
        <td colspan="2" align="center" style="padding-bottom:10px;">
            ข้อมูลหนังสือแต่งตั้ง
        </td>
    </tr>
     <tr>
            <td style="min-width:310px;"></td>
            <td style="min-width:310px;"></td>
        </tr>
        <tr>
            <td align="right">รหัสคณะ: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[FacultyID] ?></td>
        </tr>
        <tr>
            <td align="right">เลขที่เอกสาร: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[numberDoc] ?></td>
        </tr>   
        <tr>
            <td align="right">หัวเรื่อง: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[title] ?></td>
        </tr>
        <tr>
            <td align="right">ปีการศึกษา: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[year] ?></td>
        </tr>   
        <tr>
            <td align="right">รายละเอียด: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[detail] ?></td>
        </tr>
       <tr>
            <td align="right">วันที่: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[dateDoc] ?></td>
        </tr>
        <tr>
            <td align="right">เจ้าหน้าที่จัดทำ: </td>
            <td>&nbsp;&nbsp;<?= $row_appointment[username] ?></td>
        </tr>       
    </table>
</div>
</form>