<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IndexAdviser</title>
<link href="css/styleIndex.css" rel="stylesheet" type="text/css" />
<link href="module_login/css/loginStyle.css" type="text/css" rel="stylesheet" />
<link href="../adviser8/jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/css/start/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../adviser8/jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../adviser8/jquery-ui-1.10.3.custom/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="pdfobject/pdfobject.js"></script>
<? if ($_SESSION["userTypeID"]=="1"){ ?>
		<script type="text/javascript" src="js/jsAdmin.js"></script>
<? } ?>
<? if ($_SESSION["userTypeID"]=="2"){ ?>
		<script type="text/javascript" src="js/jsStaff.js"></script>
<? } ?>
<? if ($_SESSION["userTypeID"]=="3"){ ?>
		<script type="text/javascript" src="js/jsTeacher.js"></script>
<? } ?>
<? if ($_SESSION["userTypeID"]=="4"){ ?>
		<script type="text/javascript" src="js/jsStudent.js"></script>
<? } ?>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
	width : 400,
 });
 $(function() {
    $( ".datepicker" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });
</script>
<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
<div id="dialog-confirm"></div>
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
    	<div id="menuBox">
        		<? include("module_login/php/statusLogin.php");?>
            	<div id="mainMenu">
                <? 
					if ($_SESSION["userTypeID"]=="1"){
        			 		include "module_admin/menuAdmin.php";
                    	}
					if ($_SESSION["userTypeID"]=="2"){
        			 		include "staff/php/menuStaff.php";
                    	}
					if ($_SESSION["userTypeID"]=="3"){
        			 		include "teacher/php/menuTeacher.php";
                    	}
					if ($_SESSION["userTypeID"]=="4"){
        			 		include "student/php/menuStudent.php";
                    	}
				?>
          		</div>
           </div>
           <div id="detailBox">
               <div>
                    <? 
                    if ($_SESSION["userTypeID"]=="1"){
                            include ("admin/php/typeAdmin.php");
                            }
                    if ($_SESSION["userTypeID"]=="2"){
                            include ("staff/php/typeStaff.php");
                            }
                    if ($_SESSION["userTypeID"]=="3"){
                            include ("teacher/php/typeTeacher.php");
                            }
                    if ($_SESSION["userTypeID"]=="4"){
                            include ("student/php/typeStudent.php");
                            }
                    ?>
                    </div>
                <?
                if ($_GET['mod']=="mainPage"){
                    include ("mainPage.php");
                    }
                if ($_GET['mod']=="profile"){
                    include ("profile/profile.php");
                    }
                ?>
           </div>
          <div style="clear:both;"></div>
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