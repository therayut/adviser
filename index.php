<?
	session_start();
	if($_SESSION['userID'] == '' && $_GET[mod]=='')
	{
		header("Location:index.php?mod=login");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IndexAdviser</title>
<link href="css/styleIndex.css" rel="stylesheet" type="text/css" />
<link href="module_login/css/loginStyle.css" type="text/css" rel="stylesheet" />
<link href="jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/css/start/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="module_login/js/jsRegister.js"></script>
</head>
<body>
	<div id="headBox" style="margin:0px auto;height: 65px; border:1px solid #e5e5e5; background-color:#f1f1f1;text-align:left;">
    	<div style="margin-top:15px;">
        	<div style="color:#666; float:left; font-size:30px; margin-left:15%; ">Adviser System</div>
            <div>
			<?
            	include ("module_login/php/menuMember.php");
			?>
             </div>
            <div style="clear:both"></div>
        </div>
    </div>
    <div id="mainBox" >
    	<div style="float:left;">
            <img style="width:550px;" src="image/group.jpg" />
        </div>
        <div style="px;float:right;width:40%;">
        	<div style="float:right;">
                <?
				   if ($_GET['mod']=="login"){
                    include ("module_login/php/LoginForm.php");
                    }
				 	if ($_GET['mod']=="register"){
                    include ("module_login/php/registerForm.php");
                    }
					if ($_GET['mod']=="ForgotPassword"){
                    include ("module_login/php/ForgotPassword.php");
                    }
				 ?>
            </div>
         <div style="clear:both;"></div>         
         	<div style="margin-top:20px; font-size:14px; margin-left:5px; cursor:pointer;">
            </div>    
         </div>
         <div style="clear:both;"></div>
         <table align="left">
         	<tr>
            	<td>
                	<div class="newIndex">
                    	<div>
                    		<img width="40px;" height="40px;" src="image/label_new.png" />
                            ข่าวประกาศ
                        </div>
                    </div>
                 </td>
            </tr>
         </table>
         <table align="right">
         	<tr>
            	<td>
                	<div class="menuIndex">
                    	<img width="30px;" height="30px;" style="margin-top:12px;" src="image/Icon-manual.png" />&nbsp;คู่มือการใช้งาน
                  	</div>
               	</td>
                <td>
                	<div class="menuIndex">
                    	<img width="30px;" height="30px;" style="margin-top:12px;" src="image/resume.png" />&nbsp;กรอกประวัติ
                    </div>
                </td>
                <td>
                	<div class="menuIndex">
                    	<img width="30px;" height="30px;" style="margin-top:12px;" src="image/form.png" />&nbsp;แบบฟอร์ม
                    </div>
                </td>
            </tr>
            <tr>
            	<td>
                	<div class="menuIndex">
                    	<img width="30px;" height="30px;" style="margin-top:12px;" src="image/calendar.png" />&nbsp;ปฏิทิน
                    </div>
                </td>
                <td>
                	<div class="menuIndex">
                    	<img width="30px;" height="30px;" style="margin-top:12px;" src="image/document-icon.png" />&nbsp;หนังสือแต่งตั้ง
                    </div>
                </td>
                <td>
                	<div class="menuIndex">
                    	<img width="30px;" height="30px;" style="margin-top:12px;" src="image/About.png" />&nbsp;เกี่ยวกับระบบ
                    </div>
                </td>
            </tr>
         </table>
    </div>
    <div style="clear:both;"></div>
    <div style="width:980px;margin:0px auto;height: 35px; border:1px solid #e5e5e5; background-color:#f1f1f1;">
    	<span style="font-size:14px;color:#333;">link ที่เกี่ยวข้อง
        	<a class="pagelink" href="http://202.29.52.14/~stu_student/"> กองพัฒนานักศึกษา</a>&nbsp;||
            <a class="pagelink" href="http://academic.uru.ac.th/"> กองบริการการศึกษา</a>&nbsp;||
            <a class="pagelink" href="http://www.studentloan.or.th/index.php"> กองทุนเงินให้กู้ยืมเพื่อการศึกษา</a>
        </span>
    </div>
</body>
</html>