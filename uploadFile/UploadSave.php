<?
sleep(3);

if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
{
		include("../connect.php");
		$strSQL = "INSERT INTO appointmentfilepdf ";
		$strSQL .="(FilesName) VALUES ('".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysql_query($strSQL);	
		if(!$objQuery)
			{
				echo "<script>alert('Error Save [".mysql_error()."]');</script>";
			}
			else{
			echo "<script>alert('Upload file successfully!');</script>";
			echo "<script>window.parent.showResult('1');</script>";
			}
}
else
{
	echo "<script>alert('Error! Cannot upload data');</script>";
	echo "<script>window.top.window.showResult('2');</script>";
}
?>