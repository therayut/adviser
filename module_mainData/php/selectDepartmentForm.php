<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อภาควิชา
    </td>
</tr>
<tr>
	<td style="min-width:520px;">ชื่อ</td>
    <td style="min-width:100px;">รายละเอียด</td>
</tr>
<?
	include ("connect.php");
	$VD= $_GET["facultyID"];
	$strSQL = "SELECT * FROM department WHERE FacultyID = $VD";
	$objQuery = mysql_query($strSQL);
	while($row_department= mysql_fetch_array($objQuery)){
?>
<tr>
	<td>
    	<a class="detailSelect" href="home.php?mod=major&facultyID=<?=$row_department["FacultyID"] ?>&departmentID=<?=$row_department["DepartmentID"] ?>"><?=$row_department["DepartmentName"] ?></a>
    </td>
</tr>
<? } ?>
</table>
