<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อกลุ่มเรียน
    </td>
</tr>
<tr>
	<td style="min-width:520px;">ชื่อ</td>
    <td style="min-width:100px;">รายละเอียด</td>
</tr>
<?
	include ("connect.php");
	$VD= $_GET["majorID"];
	$strSQL = "SELECT * FROM studentGroup WHERE MajorID = $VD";
	$objQuery = mysql_query($strSQL);
	while($row_studentGroup= mysql_fetch_array($objQuery)){
?>
<tr>
	<td>
    	<a class="detailSelect" href="home.php?mod=detailStudentGroup&facultyID=<?=$row_studentGroup["FacultyID"] ?>&departmentID=<?=$row_studentGroup["DepartmentID"] ?>&majorID=<?=$row_studentGroup["MajorID"] ?>&groupID=<?=$row_studentGroup["groupID"] ?>"><?=$row_studentGroup["groupName"] ?></a>
    </td>
</tr>
<? } ?>
</table>