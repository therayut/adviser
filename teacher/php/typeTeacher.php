     
     <!------------------start code จักการข้อมูลนัดหมาย--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left">
      <? 
			if ($_GET['mod']=="managedating"){
				include ("module_dating/php/selectDatingForm.php");
			}
			if ($_GET['mod']=="detailDating"){
				include ("module_dating/php/detailDating.php");
				}
	  ?>
      </div>
            <div style="float:right;">
                  <? if ($_GET['mod']=="detailStudent"){ ?>
                		<div style="cursor:pointer;" onClick="editStudent('<?=$_GET["userID"] ?>')"><img class="icon2" title="แก้ไขนักศึกษา" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteStudent('<?=$_GET["userID"] ?>')"><img class="icon3" title="ลบนักศึกษา" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageStudent"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>
          
     <!------------------start code จักการข้อมูลกลุ่มเรียน--------------------------------------------------------------------------------------------------------------------------->
     <!------------------start code จักการข้อมูลนักศึกษา--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left;">
      <? 
			if ($_GET['mod']=="manageStudent"){
				include ("teacher/php/selectStudentForm.php");
			}
			if ($_GET['mod']=="detailStudent"){
				include ("teacher/php/detailStudent.php");
				}
	  ?>
      </div>
            <div style="float:right; ">
                    <? if ($_GET['mod']=="manageStudent"){ ?>
                   		<div onClick="insertStudentForm()"><img class="icon1" title="เพิ่มนักศึกษา" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailStudent"){ ?>
                		<div style="cursor:pointer;" onClick="editStudent('<?=$_GET["userID"] ?>')"><img class="icon2" title="แก้ไขนักศึกษา" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteStudent('<?=$_GET["userID"] ?>')"><img class="icon3" title="ลบนักศึกษา" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageStudent"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>
          
          
          <!------------------start code จักการข้อบันทึกการเข้าพบ--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left;">
      <? 
			if ($_GET['mod']=="manageRecordMeet"){
				include ("teacher/php/selectRecordMeetForm.php");
			}
			if ($_GET['mod']=="detailRecordMeet"){
				include ("teacher/php/detailRecordMeet.php");
				}
	  ?>
      </div>
            <div style="float:right; ">
                    <? if ($_GET['mod']=="manageRecordMeet"){ ?>
                   		<div onClick="insertRecordMeetForm()"><img class="icon1" title="เพิ่มบันทึกการเข้าพบ" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailRecordMeet"){ ?>
                		<div style="cursor:pointer;" onClick="editRecordMeet('<?=$_GET["recordMeetID"] ?>')"><img class="icon2" title="แก้ไขบันทึกการเข้าพบ" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteRecordMeet('<?=$_GET["recordMeetID"] ?>')"><img class="icon3" title="ลบหนังสือแต่งตั้ง" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageRecordMeet"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>
           <!------------------start code จักการข้อปฏิทินนัดหมาย--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left; ">
      <? 
			if ($_GET['mod']=="manageCalendar"){
				include ("staff/php/selectCalendarForm.php");
			}
			if ($_GET['mod']=="detailCalendar"){
				include ("staff/php/detailCalendar.php");
				}
	  ?>
      </div>
            <div style="float:right;">
                    <? if ($_GET['mod']=="manageCalendar"){ ?>
                   		<div onClick="insertCalendarFrom()"><img class="icon1" title="เพิ่มหนังสือแต่งตั้ง" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailCalendar"){ ?>
                		<div style="cursor:pointer;" onClick="editCalendar('<?=$_GET["calendarID"] ?>')"><img class="icon2" title="แก้ไขหนังสือแต่งตั้ง" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteCalendar('<?=$_GET["calendarID"] ?>')"><img class="icon3" title="ลบหนังสือแต่งตั้ง" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageCalendar"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>
          <!------------------start code จักการข้อข่าว--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left; ">
      <? 
			if ($_GET['mod']=="manageNew"){
				include ("staff/php/selectNewForm.php");
			}
			if ($_GET['mod']=="detailNew"){
				include ("staff/php/detailNew.php");
				}
	  ?>
      </div>
            <div style="float:right; ">
                    <? if ($_GET['mod']=="manageNew"){ ?>
                   		<div onClick="insertNewFrom()"><img class="icon1" title="เพิ่มหนังสือแต่งตั้ง" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailNew"){ ?>
                		<div style="cursor:pointer;" onClick="editNew('<?=$_GET["newID"] ?>')"><img class="icon2" title="แก้ไขหนังสือแต่งตั้ง" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteNew('<?=$_GET["newID"] ?>')"><img class="icon3" title="ลบหนังสือแต่งตั้ง" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageNew"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>
                <!------------------start code จักการสรุปงานอาจารย์--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left; ">
      <? 
			if ($_GET['mod']=="manageSumofoperations"){
				include ("staff/php/selectSumofoperationsForm.php");
			}
			if ($_GET['mod']=="detailSumofoperations"){
				include ("staff/php/detailSumofoperations.php");
				}
	  ?>
      </div>
            <div style="float:right; ">
                    <? if ($_GET['mod']=="manageSumofoperations"){ ?>
                   		<div onClick="insertSumofoperationsFrom()"><img class="icon1" title="เพิ่มหนังสือแต่งตั้ง" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailSumofoperations"){ ?>
                		<div style="cursor:pointer;" onClick="editSumofoperations('<?=$_GET["SOTID"] ?>')"><img class="icon2" title="แก้ไขสรุปงานอาจารย์" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteSumofoperations('<?=$_GET["SOTID"] ?>')"><img class="icon3" title="ลบหนังสรุปงานอาจารย์" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageSumofoperations"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>
           <!------------------start code จักการฟอร์ม--------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left; ">
      <? 
			if ($_GET['mod']=="manageForm"){
				include ("module_form/php/selectForm.php");
			}
			if ($_GET['mod']=="detailForm"){
				include ("module_form/php/detailForm.php");
				}
	  ?>
      </div>
            <div style="float:right; ">
                    <? if ($_GET['mod']=="manageForm"){ ?>
                   		<div onClick="insertFrom()"><img class="icon1" title="เพิ่มฟอร์ม" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailForm"){ ?>
                		<div style="cursor:pointer;" onClick="editForm('<?=$_GET["SOTID"] ?>')"><img class="icon2" title="แก้ไขแบบฟอร์ม" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteForm('<?=$_GET["SOTID"] ?>')"><img class="icon3" title="ลบแบบฟอร์ม" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageForm"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>

