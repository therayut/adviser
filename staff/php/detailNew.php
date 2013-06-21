<?
	include ("connect.php");
	$uID = $_GET[newID];
	$strSQL = "SELECT * FROM new INNER JOIN user ON new.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE newID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_new = mysql_fetch_array($objQuery);
?>

<div style="min-height:500px;border:1px solid #e5e5e5; margin-left:10px; ">
<table style="width:630px; float:left">
    <tr>
        <td colspan="2" align="center" style="padding-bottom:10px;">
            ข้อมูลกลุ่ม
        </td>
    </tr>
     <tr>
            <td style="min-width:310px;"></td>
            <td style="min-width:310px;"></td>
        </tr>
        <tr>
            <td align="right">คณะ: </td>
            <td>&nbsp;&nbsp;<?= $row_new['FacultyName'] ?></td>
        </tr>
        <tr>
            <td align="right">ผู้เขียนข่าว: </td>
            <td>&nbsp;&nbsp;<?= $row_new['name']."   ".$row_new['surname'] ?></td>
        </tr>       
        <tr>
            <td align="right">วันที่: </td>
            <td>&nbsp;&nbsp;<?= $row_new['dateNew'] ?></td>
        </tr> 
        <tr>
            <td align="right">หัวเรื่อง: </td>
            <td>&nbsp;&nbsp;<?= $row_new['title'] ?></td>
        </tr>   
        <tr>
            <td align="right">รายละเอียด: </td>
            <td>&nbsp;&nbsp;<?= $row_new['detail'] ?></td>
        </tr>   
    </table>
</div>