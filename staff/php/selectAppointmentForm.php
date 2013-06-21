<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px; padding-top:10px;" align="center">
<tr>
	<td colspan="2" align="center" style="padding-bottom:10px;">
    	รายชื่อหนังสือแต่งตั้ง
    </td>
</tr>
<tr>
	<td  align="center">
    	<? 
		if ($_GET['mod']=="manageAppointment"){
			include("uploadFile/UploadForm.php");
			echo "<br>";
			include("uploadFile/showAppointment.php");
        }
		?>
    </td>
</tr>
</table>