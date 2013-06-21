<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อคณะ
    </td>
</tr>
<tr>
	<td style="min-width:520px;">ชื่อ</td>
</tr>
<?
	include ("connect.php");
	$strSQL = "SELECT * FROM faculty";
	$objQuery = mysql_query($strSQL);
	while($row_faculty = mysql_fetch_array($objQuery)){
		
?>
<tr>
	<td>
    	<a class="detailSelect" href="home.php?mod=department&facultyID=<?=$row_faculty["FacultyID"] ?>"><?=$row_faculty["FacultyName"] ?></a>
    </td>
</tr>
<? } ?>
</table>