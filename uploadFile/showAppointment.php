<?
	include ("connect.php");
	$strSQL = "SELECT * FROM appointmentFilePdf";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="200" border="1px;">
<tr>
<td width="50">Files</div></td>
<td width="150">Files Name</div></td>
<td width="50">Delete</td>
</tr>
<?
	while($objResult = mysql_fetch_array($objQuery))
	{
?>
<tr style="background:#CCC">
<td><?=$objResult["FilesID"];?></td>
<td><center><a href="uploadFile/myfile/<?=$objResult["FilesName"];?>"><?=$objResult["FilesName"];?></a></center></td>
<td align="center"><img style="width:30px; height:30px;" src="image/png/sub_blue_delete.png" /></td>
</tr>
<?
	}
?>
</table>
<?
mysql_close($con);
?>