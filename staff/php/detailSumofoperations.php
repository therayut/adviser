<?
	include ("connect.php");
	$uID = $_GET[SOTID];
	$strSQL = "SELECT * FROM sumofoperationsteacher INNER JOIN user ON sumofoperationsteacher.userID = user.userID INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE SOTID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_sumofoperations = mysql_fetch_array($objQuery);
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
            <td align="right">คณะ: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['FacultyName'] ?></td>
        </tr>
        <tr>
            <td align="right">ผู้่จัดทำ: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['name']."   ".$row_sumofoperations['surname'] ?></td>
        </tr>       
        <tr>
            <td align="right">วันที่: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['date'] ?></td>
        </tr>
       <tr>
            <td align="right">เทมอ: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['term'] ?></td>
        </tr>  
        <tr>
            <td align="right">ปีการศึกษา: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['year'] ?></td>
        </tr>   
        <tr>
            <td align="right">หัวเรื่อง: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['title'] ?></td>
        </tr>   
        <tr>
            <td align="right">ปัญหาที่พบ: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['problem'] ?></td>
        </tr>  
       <tr>
            <td align="right">ข้อเสนอแนะ: </td>
            <td>&nbsp;&nbsp;<?= $row_sumofoperations['suggestion'] ?></td>
        </tr>  

    </table>
</div>