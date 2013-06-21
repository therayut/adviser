<?
	include ("connect.php");
	$uID = $_GET[userID];
	$strSQL = "SELECT * FROM user WHERE userID = $uID";
	$objQuery = mysql_query($strSQL);	
	$row_Account = mysql_fetch_array($objQuery);
?>
<div style="min-height:500px;border:1px solid #e5e5e5; margin-left:10px; ">
<table style="width:630px; float:left">
    <tr>
        <td colspan="2" align="center" style="padding-bottom:10px;">
            ข้อมูลกลุ่ม
        </td>
    </tr>
     <tr>
            <td style="min-width:310px;"></td>
            <td style="min-width:310px;"></td>
        </tr>
        <tr>
            <td align="right">ชื่อเข้าใช้ระบบ: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[username]?></td>
        </tr>        
        <tr>
            <td align="right">รหัสผ่าน: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[password]?></td>
        </tr>
        <tr>
            <td align="right">รหัสประเภท: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[userTypeID]?></td>
        </tr>   
        <tr>
            <td align="right">คณะ: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[FacultyID]?></td>
        </tr>
        <tr>
            <td align="right">ภาควิชา: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[DepartmentID]?></td>
        </tr>   
        <tr>
            <td align="right">หลักสูตร: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[MajorID]?></td>
        </tr>
       <tr>
            <td align="right">ชื่อ: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[name]?></td>
        </tr>
        <tr>
            <td align="right">นามสกุล: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[surname]?></td>
        </tr>
        <tr>
            <td align="right">รหัสบัตรประจำตัวประชาชน: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[identificationID]?></td>
        </tr>  
        <tr>
            <td align="right">ที่อยู่: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[address]?></td>
        </tr>    
        <tr>
            <td align="right">โทรศัพท์: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[phone]?></td>
        </tr>  
        <tr>
            <td align="right">อีเมลล์: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[email]?></td>
        </tr>        
       	<tr>
            <td align="right">สถานะการใช้งาน: </td>
            <td>&nbsp;&nbsp;<?=$row_Account[Active]?></td>
        </tr>         
    </table>
    </div>