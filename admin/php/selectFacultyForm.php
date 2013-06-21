<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อคณะ
    </td>
</tr>
<tr>
	<td style="min-width:520px;">ชื่อ</td>
    <td style="min-width:100px;">รายละเอียด</td>
</tr>
<?
	include ("connect.php");
	$strSQL = "SELECT * FROM faculty";
	$objQuery = mysql_query($strSQL);
	while($row_faculty = mysql_fetch_array($objQuery)){
		
?>
<tr>
	<td>
    	<?=$row_faculty["FacultyName"] ?>
    </td>
    <td>
    	<a class="detailSelect" href="home.php?mod=department&facultyID=<?=$row_faculty["FacultyID"] ?>"><img width="30px;" height="30px;" src="image/png/blog.png" /></a>
    </td>
</tr>
<? } ?>
</table>