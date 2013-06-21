<?
	session_start();
	if($_SESSION['userID'] == '')
	{
		echo "<a href='index.php?mod=login'>please login</a>";
		//header("location:index.php");
		exit();
		}
	include('connect.php');
	$strSQL = "SELECT * FROM user INNER JOIN usertype ON user.userTypeID = usertype.UserTypeID WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form>
    <table style="margin-top:10px; margin-bottom:10px;">
        <tr>
            <td align="center" rowspan="3"  style="font-size:12px" bgcolor="#CCCCCC" width="30px;" height="50px;"><img style="width:50px; height:50px;" src="profile/uploaded-images/<?= $objResult['img'] ?>"/></td>
            <td style="font-size:14px">&nbsp;&nbsp;<?= $objResult['name']."   ".$objResult['surname'] ?></td>               
        </tr>
        <tr>
            <td>&nbsp;&nbsp;<a class="pagelink" href="home.php?mod=profile"  style="font-size:14px">แก้ไขข้อมูลส่วนตัว</a></td>   
        </tr>
    </table>
</form>
