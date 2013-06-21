<? session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include('connect.php');
	$strSQL = "SELECT * FROM user INNER JOIN major ON user.majorID = major.majorID INNER JOIN department ON major.departmentID = department.departmentID INNER JOIN faculty ON department.facultyID = faculty.facultyID WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

      <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <title>Profile image upload without reloading the page</title>
        <link rel="stylesheet" href="profile/css/style.css" type="text/css" media="screen, projection">
	<script type="text/javascript" src="profile/js/jQuery-custom-input-file.js"></script>
        <script type="text/javascript" src="profile/js/jquery.upload.js"></script>
	<script type="text/javascript">
	      var uploadURL = "profile/upload.php";
 	      $(document).ready(function(){
			  $("#dataProfile1").mouseover(function(){
				$('#btn_edit_data_profile').removeClass("hide");
				});
				$("#dataProfile1").mouseout(function(){
						$('#btn_edit_data_profile').addClass("hide");
				});
				$("#dataProfile2").mouseover(function(){
						$('#btn_edit_data_profile2').removeClass("hide");
				});
				$("#dataProfile2").mouseout(function(){
						$('#btn_edit_data_profile2').addClass("hide");
				});
				$("#dataProfile3").mouseover(function(){
						$('#btn_edit_data_profile3').removeClass("hide");
				});
				$("#dataProfile3").mouseout(function(){
						$('#btn_edit_data_profile3').addClass("hide");
				});
				
                    $('a#uploadFile').file();
                    $('a#delete').click(function(){
                          $('input#profileImageFile').val("");
                          $('img#profileImage').attr("src","profile/images/profileBlank.jpg");
                          $('div#messageBox').html("Image deleted !");
                          $('div#messageBox').attr("class","success");
                          $('a#delete').hide();
                    });
                    $('input#uploadFile').file().choose(function(e, input) {
                        input.upload(uploadURL, function(res) {
                            if (res=="invalid"){
                                $('div#messageBox').attr("class","error");
                                $('div#messageBox').html("Invalid extension !");
                            }else{
                                $('div#messageBox').attr("class","success");
								$('div#messageBox').html(res);
                                $('img#profileImage').attr("src","profile/uploaded-images/"+res);
                                $('input#profileImageFile').val(res);
                                $('a#delete').show();
                                $(this).remove();
                            }
                        }, '');                  
              });
               });
 	</script>
      </head>
      <body>
            <form id="idEditImgForm" method="post" class="profileForm"><br>
            <table>
            <tr>
            <td colspan="2"><!----เปิดรูป----->
            <div class="headText" style="margin-left:250px; font-size:30px; padding-bottom:10px;">ข้อมูลส่วนตัว</div>
            </td>
            </tr>
            <tr>
            <td valign="top">
             <div class="imageContainer" style="margin-left:10px; padding-bottom:10px;">
			<?
			if ($objResult['img'] == ""){
			?>
          
                <img alt="" src="profile/images/profileBlank.jpg" width="120" height="120" id="profileImage">
			<?
			}else{
			?>
                <img alt=""  src="profile/uploaded-images/<?= $objResult['img'] ?>" width="120" height="120" id="profileImage">
			<? }
			?>
            	<div style="clear:both"></div>
                <a href="#" id="uploadFile" title="Upload"><img alt=""  src="profile/images/upload.jpg"></a>
                <a href="#" id="delete" title="Delete" style="display:none;position:relative;z-index:999999;"><img alt=""  src="profile/images/delete.jpg"></a>
                <div id="messageBox"></div>
                <div style="margin-left:28px;">
                	<input type="hidden" name="editImgName" id="profileImageFile">
                	<input type="hidden" name="editUserID" value="<?= $objResult['userID'] ?>">
          	  		<input type="button" onClick="editImgProfile()" value="บันทึก" class="submit">
                </div>
	    </div>
      </td>
      <td><!----ปิดรูป----->
        <div style="float:right;">        
            <div  id="dataProfile1" style="margin-top:10px;">
            <table>
            <tr>
                <td colspan="2" style=" font-size:20px;">ข้อมูลระบบ</td>
                <td><img style=" float:right; cursor:pointer"; onClick="editDataPofile1('<?= $objResult['userID'] ?>')" width="20px;" height="20px;" src="image/cog.png" class="hide" id="btn_edit_data_profile"></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;" width="150;">ชื่อเข้าใช้งาน  : </td>
                <td width="200;">&nbsp;&nbsp;<?= $objResult['username'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">รหัสผ่าน  : </td>
                <td align="left">&nbsp;&nbsp;<?= $objResult['password'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">อีเมล์  : </td>
                <td align="left">&nbsp;&nbsp;<?= $objResult['email'] ?></td>
                <td></td>
            </tr>
            </table>
            </div>
            <div id="dataProfile2" style="margin-top:15px;">
            <table>
            <tr>
                <td colspan="2" style=" font-size:20px;">ข้อมูลส่วนตัว</td>
                <td><img style=" float:right; cursor:pointer"; onClick="editDataPofile2('<?= $objResult['userID'] ?>')" width="20px;" height="20px;" src="image/cog.png"  class="hide" id="btn_edit_data_profile2"></td>
            </tr>
            <tr>
                <td style=" padding-left:20px;">ชื่อ - นามสกุล  :</td>
                <td width="200;"><?= $objResult['name']."   ".$objResult['surname'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">เลขประจำตัวประชาชน  : </td>
                <td width="200;"><?= $objResult['identificationID'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">ที่อยู่  : </td>
                <td width="200;"><?= $objResult['address'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">คณะ  : </td>
                <td width="200;"><?= $objResult['FacultyName'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">ภาควิชา  : </td>
                <td width="200;"><?= $objResult['DepartmentName'] ?></td>
                <td></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">หลักสูตร  : </td>
                <td  width="200;"><?= $objResult['MajorName'] ?></td>
                <td></td>
            </tr>
            </table>
           </div>
           <div id="dataProfile3" style="margin-top:15px;">
            <table>
            <tr>
                 <td colspan="2" style=" font-size:20px;">ข้อมูลเฉพาะด้าน</td>
                <td><img style=" float:right; cursor:pointer"; onClick="editDataPofile3('<?= $objResult['userID'] ?>')" width="20px;" height="20px;" src="image/cog.png"  class="hide" id="btn_edit_data_profile3"></td>
            </tr>
            <tr>
                 <td style=" padding-left:20px;">ทดสอบ  : </td>
                <td  width="200;">ทดสอบ</td>
                <td></td>
            </tr>
            </table>
        </div>
       <div class="clear"></div>
      </div>
      </td>
      </tr>
      </table>
            </form>
      </body>