<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
<tr>
	<td colspan="3" align="center" style="padding-bottom:10px;">
    	ข่าวประชาสัมพันธ์
    </td>
</tr>
<tr>
	<td style="min-width:420px;">ชื่อ</td>
    <td style="min-width:100px;">รายละเอียด</td>
</tr>
<?
	include ("connect.php");
	$strSQL = "SELECT * FROM new";
	$objQuery = mysql_query($strSQL);
	while($row_new = mysql_fetch_array($objQuery)){
		
?>
<tr>
	<td>
		<?=$row_new[title]?>
	</td>
    <td>
<a class="detailSelect" href="home.php?mod=detailNew&newID=<?=$row_new[newID]?>"><img width="30px;" height="30px;" src="image/png/blog.png" /></a>
    </td>  	
</tr>

<? } ?>

</table>