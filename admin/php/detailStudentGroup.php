<?
	include ("connect.php");
	$VD= $_GET["groupID"];
	$strSQL = "SELECT * FROM studentGroup INNER JOIN major ON studentGroup.MajorID = major.MajorID INNER JOIN department ON major.DepartmentID = department.DepartmentID INNER JOIN faculty ON department.FacultyID = faculty.FacultyID WHERE groupID = $VD";
	$objQuery = mysql_query($strSQL);
	while($row_studentGroup= mysql_fetch_array($objQuery)){
?>
<div style="min-height:500px;border:1px solid #e5e5e5; margin-left:10px; ">
<table style="width:620px; float:left">
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
            <td align="right">ชื่อกลุ่ม: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['groupName'] ?></td>
        </tr>
        <tr>
            <td align="right">ปีการศึกษา: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['year'] ?></td>
        </tr>       
        <tr>
            <td align="right">นักศึกษาในกลุ่ม: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['studentInGroup'] ?></td>
        </tr> 
        <tr>
            <td align="right">อาจารย์ที่ปรึกษา: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['teacherInGroup'] ?></td>
        </tr>   
        <tr>
            <td align="right">คณะ: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['FacultyName'] ?></td>
        </tr>   
        <tr>
            <td align="right">ภาควิชา: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['DepartmentName'] ?></td>
        </tr>          
        <tr>
            <td align="right">หลักสูตร: </td>
            <td align="left">&nbsp;&nbsp;<?= $row_studentGroup['MajorName'] ?></td>
        </tr>          
    </table>
<? } ?>
</div>