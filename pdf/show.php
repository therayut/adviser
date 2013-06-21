<?
include "../connect.php";
$strSQL = "SELECT * FROM fw001 WHERE formID = 1";
$sqlquery = mysql_query($strSQL);
$row_fw = mysql_fetch_array($sqlquery);
?>
<html>
  <head>
     <title>PDFObject example</title>
     <script type="text/javascript" src="../jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
     <script type="text/javascript" src="../pdfobject/pdfobject.js"></script>
     <script type="text/javascript">
	/* window.onload = function (){
		$(".fancypdf").click(function(){
		 $.fancybox({
		   type: 'html',
		   autoSize: false,
		   content: '<embed src="'+this.href+'#nameddest=self&page=1&view=FitH,0&zoom=80,0,0" type="application/pdf" height="99%" width="100%" />',
		   beforeClose: function() {
			 $(".fancybox-inner").unwrap();
		   }
		 }); //fancybox
		 return false;
		}); //click
	 };*/
      window.onload = function (){
        var myPDF = new PDFObject({
		  url: "../pdf/FW001.pdf",
		  id: "myPDF",
		  pdfOpenParams: {
			navpanes: 1,
			statusbar: 1,
			view: "FitH",
			toolbar: 1,
			pagemode: "thumbs"
		  }
		}).embed();
		 //var test = $("#myPDF").getField("field_1").defaultValue = "0"
		 //alert(test);
      };
    </script>
  </head>
 
  <body>
  <!--<input type="text" name="textField_3" value="<?=$row_fw[field_3]?>"/>
  <a class="fancypdf" href="../pdf/FW001.pdf">open pdf</a>-->
  </body>
</html>