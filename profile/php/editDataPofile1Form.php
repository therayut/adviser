<?
	include ("../../connect.php");
	$uID = $_GET[editUserID];
	$strSQL = "SELECT * FROM user WHERE userID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_dataPofile = mysql_fetch_array($objQuery);
?>
<form id="idEditDataPofile1Form">
	<table align="center"> 
  		<input type="hidden" name="userID" value="<?=$row_dataPofile[userID]?>">
        <tr>
            <td>ชื่อเข้าใช้ระบบ: </td>
            <td><input type="text" name="editUserName" value="<?=$row_dataPofile[username]?>"/></td>
        </tr>        
        <tr>
            <td>รหัสผ่าน: </td>
            <td><input type="text"name="editPassword" value="<?=$row_dataPofile[password]?>" /></td>
        </tr>
       <tr>
            <td>อีเมล์: </td>
            <td><input type="text"name="editEmail" value="<?=$row_dataPofile[email]?>" /></td>
        </tr>
  	</table>
 </form>