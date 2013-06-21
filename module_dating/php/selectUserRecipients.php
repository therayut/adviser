<table>
<?
	include ("../../connect.php");
	$strSQL = "SELECT * FROM user";
	$objQuery = mysql_query($strSQL);
	while($row_user = mysql_fetch_array($objQuery)){	
?>
<tr>
	<td>
		<input type="checkbox" value="<?=$row_user["userID"]?>" name="checkboxRecipientsName"/><?=$row_user["name"]?>&nbsp;&nbsp;<?=$row_user["surname"]?>
        <input type="hidden" value="<?=$row_user["name"]?>&nbsp;&nbsp;<?=$row_user["surname"]?>" class="selectName" />
    </td>
</tr>

<? }?>
</table>