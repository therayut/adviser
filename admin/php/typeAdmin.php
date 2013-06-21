
       		<?
        	if ($_GET['mod']=="faculty" || $_GET['mod']=="department" || $_GET['mod']=="major" || $_GET['mod']=="studentGroup" || $_GET['mod']=="detailStudentGroup"){
		?>
                  <div class="linkSubMenu">
                            <div style="float:left; margin-left:5px;"><a class="pagelink" style="color:#006;" href="home.php?mod=faculty">จัดการข้อมูลหลัก&nbsp;</a></div>
                            <div style="float:left; cursor:pointer">
                                <?
                                    if(isset($_GET["facultyID"])){
                                        echo "|";
                                    }
                                    $strSQL = "SELECT * FROM faculty WHERE FacultyID = '".$_GET["facultyID"]."' ";
                                    $objQuery = mysql_query($strSQL);
                                    $row_Flink = mysql_fetch_array($objQuery);
                                
                                ?>
                            <a class="pagelink" style="color:#006;" href="home.php?mod=department&facultyID=<?=$_GET["facultyID"]?>" class='link_hd'><?=$row_Flink[FacultyName]."&nbsp;"?></a>
                            </div>
                            <div style="float:left; cursor:pointer"">
                                <? 
                                    if(isset($_GET["departmentID"])){
                                        echo "|";
                                    }
                                    $strSQL = "SELECT * FROM department WHERE DepartmentID = '".$_GET["departmentID"]."' ";
                                    $objQuery = mysql_query($strSQL);
                                    $row_Dlink = mysql_fetch_array($objQuery);
                            
                                ?>
                                <a class="pagelink" style="color:#006;" href="home.php?mod=major&facultyID=<?=$_GET["facultyID"]?>&departmentID=<?=$_GET["departmentID"]?>" class='link_hd'><?=$row_Dlink[DepartmentName]."&nbsp;" ?></a>
                            </div>
                            <div style="float:left; cursor:pointer;"">
                                <? 
                                    if(isset($_GET["majorID"])){
                                        echo "|";
                                    }
                                    $strSQL = "SELECT * FROM major WHERE MajorID = '".$_GET["majorID"]."' ";
                                    $objQuery = mysql_query($strSQL);
                                    $row_Mlink = mysql_fetch_array($objQuery);
                                ?>
                                <a class="pagelink" style="color:#006;" href="home.php?mod=studentGroup&facultyID=<?=$_GET["facultyID"]?>&departmentID=<?=$_GET["departmentID"]?>&majorID=<?=$_GET["majorID"]?>" class='link_hd'><?=$row_Mlink[MajorName]."&nbsp;" ?></a>
                            </div>
                            <div style="float:left; cursor:pointer;"">
                                <? 
                                    if(isset($_GET["groupID"])){
                                        echo "|";
                                    }
                                    $strSQL = "SELECT * FROM studentGroup WHERE groupID = '".$_GET["groupID"]."' ";
                                    $objQuery = mysql_query($strSQL);
                                    $row_DSGlink = mysql_fetch_array($objQuery);
                                ?>
                                <a class="pagelink" style="color:#006;" class='link_hd'><?=$row_DSGlink[groupName]."&nbsp;" ?></a>
                            </div>
                            <div style="clear:both;"></div>
                  </div>
              </div>
                  <div style="float:left;">
                        	<?
						 	if ($_GET['mod']=="faculty"){
							include ("module_mainData/php/selectFacultyForm.php");
							}
							if ($_GET['mod']=="department"){
								include ("module_mainData/php/selectDepartmentForm.php");
								}
							if ($_GET['mod']=="major"){
								include ("module_mainData/php/selectMajorForm.php");
								}
							if ($_GET['mod']=="studentGroup"){
								include ("module_mainData/php/selectStudentGroupForm.php");
								}
							if ($_GET['mod']=="detailStudentGroup"){
								include ("module_mainData/php/detailStudentGroup.php");
								}
						?>
                  </div>
                  <!-------------------------------------------------------เพิ่มข้อมูล---------------------------------------------------------------------------------------->
            <div style="float:right;">
            	<? if ($_GET['mod']=="faculty"){ ?>
            	<div onClick="insertFacultyFrom()"><img class="icon1" title="เพิ่มคณะ" src="image/png/sub_blue_add.png" /></div>
                <? } ?>
                <? if ($_GET['mod']=="department"){ ?>
                <div onClick="insertDepartmentFrom('<?=$_GET["facultyID"] ?>')"><img class="icon1" title="เพิ่มภาควิชา" src="image/png/sub_blue_add.png" /></div>
                <? } ?>
                <? if ($_GET['mod']=="major"){ ?>
                <div onClick="insertMajorFrom('<?=$_GET["departmentID"] ?>')"><img class="icon1" title="เพิ่มหลักสูตร" src="image/png/sub_blue_add.png" /></div>
                <? } ?>
                <? if ($_GET['mod']=="studentGroup"){ ?>
                <div onClick="insertStudentGroupFrom('<?=$_GET["majorID"] ?>')"><img class="icon1" title="เพิ่มกลุ่มเรียน" src="image/png/sub_blue_add.png" /></div>
                <? } ?>
            </div>
              <!-------------------------------------------------------แก้ไขข้อมูล---------------------------------------------------------------------------------------->              
                <div style="float:right">
                    <? if ($_GET['mod']=="department"){ ?>
                    <div onClick="editFaculty('<?=$_GET["facultyID"] ?>')"><img class="icon2" title="แก้ไขคณะ" src="image/png/tools.png" /></div>
                    <? } ?>
                    <? if ($_GET['mod']=="major"){ ?>
                    <div onclick="editDepartment('<?=$_GET["departmentID"] ?>')"><img class="icon2" title="แก้ไขภาควิชา" src="image/png/tools.png" /></div>
                    <? } ?>
                    <? if ($_GET['mod']=="studentGroup"){ ?>
                    <div onClick="editMajor('<?=$_GET["majorID"] ?>')"><img class="icon2" title="แก้ไขหลักสูตร" src="image/png/tools.png" /></div>
                    <? } ?>
                    <? if ($_GET['mod']=="detailStudentGroup"){ ?>
                    <div onClick="editStudentGroup('<?=$_GET["groupID"] ?>')"><img class="icon2" title="แก้ไขกลุ่มเรียน" src="image/png/tools.png" /></div>
                    <? } ?>
                </div>
             <!-------------------------------------------------------ลบข้อมูล---------------------------------------------------------------------------------------->
                <div style="float:right">
                <? if ($_GET['mod']=="department"){ ?>
                <div onClick="deleteFaculty('<?=$_GET["facultyID"] ?>')"><img class="icon3" title="ลบคณะ" src="image/png/sub_blue_delete.png" /></div>
                <? } ?>
                <? if ($_GET['mod']=="major"){ ?>
                <div onClick="deleteDepartment('<?=$_GET["departmentID"] ?>','<?=$_GET["facultyID"] ?>')"><img class="icon3" title="ลบภาควิชา" src="image/png/sub_blue_delete.png" /></div>
                <? } ?>
                <? if ($_GET['mod']=="studentGroup"){ ?>
                <div onClick="deleteMajor('<?=$_GET["majorID"] ?>','<?=$_GET["departmentID"] ?>','<?=$_GET["facultyID"] ?>')"><img class="icon3" title="ลบหลักสูตร" src="image/png/sub_blue_delete.png" /></div>
                <? } ?>
               <? if ($_GET['mod']=="detailStudentGroup"){ ?>
                <div onClick="deleteStudentGroup('<?=$_GET["groupID"] ?>','<?=$_GET["majorID"] ?>','<?=$_GET["departmentID"] ?>','<?=$_GET["facultyID"] ?>')"><img class="icon3" title="ลบกลุ่มเรียน" src="image/png/sub_blue_delete.png" /></div>
                <? } ?>
            </div>
                <div style="clear:both;"></div>
             <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
          <? } ?>   
      <!------------------start code จักการข้อผู้ใช้งาน---------------------------------------------------------------------------------------------------------------------------->
      <div style="float:left;">
      <? 
			if ($_GET['mod']=="manageAccount"){
				include ("admin/php/selectAccountForm.php");
			}
			if ($_GET['mod']=="detailAccount"){
				include ("admin/php/detailAccount.php");
				}
	  ?>
      </div>
            <div style="float:right;">
                    <? if ($_GET['mod']=="manageAccount"){ ?>
                   		<div onClick="insertAccountForm()"><img class="icon1" title="เพิ่มผู้ใช้งาน" src="image/png/sub_blue_add.png" /></div>
                    <? } ?>
                  <? if ($_GET['mod']=="detailAccount"){ ?>
                		<div style="cursor:pointer;" onClick="editAccount('<?=$_GET["userID"] ?>')"><img class="icon2" title="แก้ไขผู้ใช้งาน" src="image/png/tools.png" /></div>
                        <div style="cursor:pointer;" onClick="deleteAccount('<?=$_GET["userID"] ?>')"><img class="icon3" title="ลบผู้ใช้งาน" src="image/png/sub_blue_delete.png" /></div>
                      <div><a href="home.php?mod=manageAccount"><img class="icon2"src="image/png/Arrow-back.png" /></a></div>
             	  <? } ?>
          </div>
          <div style="clear:both"></div>

