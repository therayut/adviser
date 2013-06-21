<form action="uploadFile/UploadSave.php" name="frmMain" method="post" enctype="multipart/form-data" target="iframe_target" onSubmit="return ChkSubmit();">
	<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
	<script language="JavaScript">

		function ChkSubmit(result)
		{
			if(document.getElementById("filUpload").value == "")
			{
				alert('Please select file...');
				return false;
			}
			
			document.getElementById("progress").style.visibility="visible"; 
			document.getElementById("divresult").innerHTML ="Uploading....";
			return true;
		}

		function showResult(result)
		{
			document.getElementById("progress").style.visibility="hidden"; 
			if(result==1)
			{
				window.location=window.location;
			}
			else
			{
				document.getElementById("divresult").innerHTML = "<font color=red> Error!! Cannot upload data </font> <br>";
			}
		}
	</script>
	<div id="divresult"></div>
	<div id="progress" style="visibility:hidden"><img src="image/loading-page.gif"></div>
	<input type="file" name="filUpload" id="filUpload">
	  <input type="submit" name="submit" value="submit">
</form>
