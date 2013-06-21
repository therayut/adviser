<div class="headSelect">ข่าวประชาสัมพันธ์</div>
<?
	include ("connect.php");
	$strSQL = "SELECT * FROM new";
	$objQuery = mysql_query($strSQL);
	while($row_new = mysql_fetch_array($objQuery)){
		
?>
<a class="detailSelect" href="home.php?mod=detailNew&newID=<?=$row_new[newID]?>"><?=$row_new["title"] ?></a><br />
<? } ?>