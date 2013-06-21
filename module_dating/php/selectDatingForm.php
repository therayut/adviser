<? session_start(); ?>
<script>
	function selectUser(){
		$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เลือกผู้รับ",
				  resizable: false,
				  minWidth: 350,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
						submitSelectUserRecipients();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("module_dating/php/selectUserRecipients.php");
		}
		
		function submitSelectUserRecipients(){
				var rep = new Array();
				var urp =new Array();
				$.each($("input[name='checkboxRecipientsName']:checked"),function(){
					rep.push($(this).val());
					urp.push($(this).next(".selectName").val());
				});
				$("#textRecipientsName").val(urp);
				$("#textRecipientsUserID").val(rep);
		}
</script>
<div id="tabs">
  <ul style="height:30px; font-size:14px">
    <li><a style="width:100px; height:20px; height:10px;" href="#tabs-1" >กล่องนัดหมาย</a></li>
    <li><a style="width:100px; height:20px; height:10px;;" href="#tabs-2">เขียนนัดหมาย</a></li>
    <li><a style="width:100px; height:20px; height:10px;;" href="#tabs-3" id="datingTab3">นัดหมายที่ส่งแล้ว</a></li>
  </ul>
  <div id="tabs-1">
    <p>
         <table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
         <? 
						if ($_GET['InBox']=="InBox"){
		?>
            <tr>
                <td style="min-width:420px;">ชื่อ</td>
                <td style="min-width:100px;">รายละเอียด</td>
            </tr>
            <?
                include ("connect.php");
                $strSQL = "SELECT * FROM detailDating INNER JOIN dating ON detailDating.datingID = dating.datingID WHERE userRecipient = '".$_SESSION['userID']."' ";
                $objQuery = mysql_query($strSQL);
                while($row_dating = mysql_fetch_array($objQuery)){
                    
            ?>
            <tr>
                <td>
                    <?=$row_dating[title]?>
                </td>
                <td>
            <a class="detailSelect" href="home.php?mod=managedating&InBox=detailInBox&SenderBox=SenderBox&datingID=<?=$row_dating[datingID]?>&userSender=<?=$row_dating[userSender]?>"><img width="30px;" height="30px;" src="image/png/blog.png" /></a>
                </td>  	
            </tr>
            <? } ?>	
            <? } ?>
            <tr>
            	<td>
                	<? 
						if ($_GET['InBox']=="detailInBox"){
							include ("module_dating/php/detailDatingSender.php");
						}
					?>
                </td>
            </tr>
		</table>
    </p>
  </div>
  <div id="tabs-2">
    <p>
    <form id="idInsertDating">
    	<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
        <input type="hidden" name="textUserSender" value="<?=$_SESSION['userID']?>" />
            <tr>
            	<td>ถึง</td>
                <td>
                <input style="width:450px;" type="text"  readonly="readonly" id="textRecipientsName"/>
                <input type="button" value="เลือก" onclick="selectUser()"/>
                <input type="hidden" name="textUserRecipients" value="" id="textRecipientsUserID" />
                </td>
            </tr>
            <tr>
            	<td>หัวเรื่อง</td>
                <td><input style="width:450px;"  type="text" name="textTitle" /></td>
            </tr>
            <tr>
            	<td>รายละเอียด</td>
               <td><textarea id="textDetailArea"></textarea><input id="textDetail" type="hidden" name="textDetail" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit" /><input type="reset" value="reset" /></td>
            </tr>
		</table>
        </form>
    </p>
  </div>
  <div id="tabs-3">
    <p>
    	<table style="border:1px solid #e5e5e5; margin-left:10px; width:620px;">
        <? 
						if ($_GET['SenderBox']=="SenderBox"){
		?>
            <tr>
                <td style="min-width:420px;">ชื่อ</td>
                <td style="min-width:100px;">รายละเอียด</td>
            </tr>
            <?
                include ("connect.php");
                $strSQL = "SELECT * FROM detailDating INNER JOIN dating ON detailDating.datingID = dating.datingID WHERE userSender = '".$_SESSION['userID']."' ";
                $objQuery = mysql_query($strSQL);
                while($row_dating = mysql_fetch_array($objQuery)){               
            ?>
            <tr>
                <td>
                    <?=$row_dating[title]?>
                </td>
                <td>
            <a class="detailSelect" href="home.php?mod=managedating&InBox=InBox&SenderBox=detailSenderBox&datingID=<?=$row_dating[datingID]?>&userRecipient=<?=$row_dating[userRecipient]?>"><img width="30px;" height="30px;" src="image/png/blog.png" /></a>
                </td>  	
            </tr>
            <? } ?>	
            <? } ?>
            <tr>
            	<td>
                	<? 
						if ($_GET['SenderBox']=="detailSenderBox"){
							?>
                            <script  language="javascript">
									$(document).ready(function(){
											$("#datingTab3").trigger("click");
									});
							</script>
                            <?php
							include ("module_dating/php/detailDatingRecipient.php");
						}
					?>
                </td>
            </tr>
		</table>
    </p>
  </div>
</div>

<script language="javascript">
$(document).ready(function(){
	$("#idInsertDating").submit(function(event) {
			$("#textDetail").val(tinyMCE.get('textDetailArea').getContent())
     			event.preventDefault();
				$.post('module_dating/sql/insertDating.php',$('#idInsertDating').serialize(),function(response){
					if(response!=" "){
						alert("บันทึกเรียบร้อยแล้ว");
						window.location=window.location
					}
					else{
						alert(response);
						}
				});
      	});
});
</script>
