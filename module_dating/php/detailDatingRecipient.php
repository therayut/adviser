<?
	include ("connect.php");
	$uID = $_GET[datingID];
	$strSQL = "SELECT * FROM detailDating WHERE datingID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_dating = mysql_fetch_array($objQuery);
?>
<div>
<table style="width:600px; float:left">
    <tr>
        <td colspan="2" align="center" style="padding-bottom:10px;">
            ข้อมูลนัดหมาย
        </td>
    </tr>
     <tr>
            <td style="min-width:300px;"></td>
            <td style="min-width:300px;"></td>
        </tr>
        <tr>
            <td align="right">หัวเรื่อง: </td>
            <td>&nbsp;&nbsp;<?= $row_dating['title'] ?></td>
        </tr>
       <tr>
            <td align="right">รายละเอียด: </td>
            <td>&nbsp;&nbsp;<?= $row_dating['detail'] ?></td>
        </tr>  
        <tr>
            <td align="right">ส่งถึง: </td>
            <? 
			$strSQL = "SELECT * FROM user WHERE  userID = $_GET[userRecipient]";
			$objQuery = mysql_query($strSQL);	
			$row_dating2 = mysql_fetch_array($objQuery);
			?>
            <td>&nbsp;&nbsp;<?= $row_dating2['name'] ?>&nbsp;&nbsp;<?= $row_dating2['surname'] ?></td>
        </tr>
        <tr>
            <td align="right">วันที่รับ: </td>
            <td>&nbsp;&nbsp;<?= $row_dating['date'] ?></td>
        </tr>
    </table>
</div>