<?
	include ("connect.php");
	$uID = $_GET[recordMeetID];
	$strSQL = "SELECT * FROM recordmeet INNER JOIN user ON recordmeet.userID = user.userID WHERE recordMeetID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_recordmeet = mysql_fetch_array($objQuery);
?>
<div style="min-height:500px;border:1px solid #e5e5e5; margin-left:10px; ">
<table style="width:630px; float:left">
    <tr>
        <td colspan="2" align="center" style="padding-bottom:10px;">
            รายละเอียดสรุปงานอาจารย์ที่ปรึกษา
        </td>
    </tr>
     <tr>
            <td style="min-width:310px;"></td>
            <td style="min-width:310px;"></td>
        </tr>
        <tr>
            <td align="right">ผู้่จัดทำ: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['name']."   ".$row_sumofoperations['surname'] ?></td>
        </tr>       
        <tr>
            <td align="right">หัวเรื่อง: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['title'] ?></td>
        </tr>
        <tr>
            <td align="right">ปัญหาที่พบ: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['problem'] ?></td>
        </tr>  
       <tr>
            <td align="right">ข้อเสนอแนะ: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['suggestion'] ?></td>
        </tr>  
        <tr>
            <td align="right">นักศึกษาที่เข้าพบ: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['student'] ?></td>
        </tr> 
        <tr>
            <td align="right">เทอม: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['term'] ?></td>
        </tr> 
        <tr>
            <td align="right">วันที่: </td>
            <td>&nbsp;&nbsp;<?= $row_recordmeet['date'] ?></td>
        </tr> 

    </table>
</div>