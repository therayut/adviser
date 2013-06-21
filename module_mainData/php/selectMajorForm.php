<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อหลักสูตร
    </td>
</tr>
<tr>
	<td style="min-width:520px;">ชื่อ</td>
    <td style="min-width:100px;">รายละเอียด</td>
</tr>
<?
	include ("connect.php");
	$VD= $_GET["departmentID"];
	$strSQL = "SELECT * FROM major WHERE DepartmentID = $VD";
	$objQuery = mysql_query($strSQL);
	while($row_major= mysql_fetch_array($objQuery)){
?>
<tr>
	<td>
    	<a class="detailSelect" href="home.php?mod=studentGroup&facultyID=<?=$row_major["FacultyID"] ?>&departmentID=<?=$row_major["DepartmentID"] ?>&majorID=<?=$row_major["MajorID"] ?>"><?=$row_major["MajorName"] ?></a>
    </td>
</tr>
<? } ?>
</table>