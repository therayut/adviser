<? session_start(); ?>
<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อบันทึกการเข้าพบ
    </td>
</tr>
<tr>
	<td style="min-width:420px;">ชื่อ</td>
    <td style="min-width:100px;">รายละเอียด</td>
</tr>
<?
	include ("connect.php");
	$strSQL = "SELECT * FROM fw001";
	$objQuery = mysql_query($strSQL);
	while($row_appointment = mysql_fetch_array($objQuery)){
?>
<tr>
	<td>
		ภาคเรียนที่:&nbsp;<?=$row_appointment[field_1] ?>&nbsp;&nbsp;เทมอที่:&nbsp;<?=$row_appointment[field_2]?>
	</td>
    <td>
    <a class="detailSelect" href="pdf/test.php?formID=<?=$row_appointment[formID]?>"><img width="30px;" height="30px;" src="image/png/blog.png" /></a>
    </td>  	
</tr>

<? } ?>

</table>