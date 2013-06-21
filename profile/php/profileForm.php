<? session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include('connect.php');
	$strSQL = "SELECT * FROM user INNER JOIN major ON user.majorID = major.majorID INNER JOIN department ON major.departmentID = department.departmentID INNER JOIN faculty ON department.facultyID = faculty.facultyID WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<script language="javascript">
	$(document).ready(function() {
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
	});
	function editDataPofile1(editUserID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อมูลระบบ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditDataPofile1();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("pofile/php/editDataPofile1Form?editUserID="+editUserID);
	}
	function submitEditDataPofile1(){
	$.post('pofile/sql/editDataPofile1.php',$('#idEditDataPofile1Form').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	function editDataPofile2(editUserID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อมูลระบบ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditDataPofile2();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("pofile/php/editDataPofile2Form?editUserID="+editUserID);
	}
	function submitEditDataPofile2(){
	$.post('pofile/sql/editDataPofile2.php',$('#idEditDataPofile2Form').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
</script>
<style>
	.hide{
		display:none;
	}
	.show{
		display:block;
	}
</style>


<div style="margin-top:20px;">
<table align="center">
	<tr>
    	<td>ข้อมูลส่วนตัว</td>
    </tr>
</table>
</div>
<div style="margin-top:10px;">
    <table align="center">
        <tr>
        	<td></td>
            <td width="100px;" height="100px;" bgcolor="#CCCCCC" align="center">เลือกภาพ</td>
            <td></td>
        </tr>
        <tr>
            <td align="center" colspan="3"><input type="file" value="อัพโหลดภาพ"></td>
        </tr>
        <tr>
       		<td align="left" colspan="3"><input type="button" value="บันทึก" /></td>
        </tr>
    </table>
</div>
<div  id="dataProfile1" style="margin-top:10px;">
	<table width="610">
    <tr>
    	<td align="right" width="130px;">ข้อมูลระบบ</td>
        <td width="220px;"></td>
        <td align="right" width="260"><img style="cursor:pointer" onclick="editDataPofile1('<?= $objResult['userID'] ?>')" width="20px;" height="20px;" src="image/png/tools.png" class="hide" id="btn_edit_data_profile"></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">ชื่อเข้าใช้งาน  : </td>
        <td>&nbsp;&nbsp;<?= $objResult['username'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">รหัสผ่าน  : </td>
        <td>&nbsp;&nbsp;<?= $objResult['password'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">อีเมล์  : </td>
        <td>&nbsp;&nbsp;<?= $objResult['email'] ?></td>
    </tr>
	</table>
    </div>
    <div id="dataProfile2" style="margin-top:15px;">
    <table width="610">
    <tr>
    	<td  align="right" width="130px;">ข้อมูลส่วนตัว</td>
        <td width="220px;"></td>
        <td align="right" width="260"><img  style="cursor:pointer"onclick="editDataPofile2('<?= $objResult['userID'] ?>')" width="20px;" height="20px;" src="image/png/tools.png" class="hide" id="btn_edit_data_profile2"></td>
    </tr>
    <tr>
    	<td></td>
        <td align="right">ชื่อ - นามสกุล  :</td>
        <td><?= $objResult['name']."   ".$objResult['surname'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">เลขประจำตัวประชาชน  : </td>
        <td><?= $objResult['identificationID'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">ที่อยู่  : </td>
        <td><?= $objResult['address'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">คณะ  : </td>
        <td><?= $objResult['FacultyName'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">ภาควิชา  : </td>
        <td><?= $objResult['DepartmentName'] ?></td>
    </tr>
    <tr>
     	 <td></td>
        <td align="right">หลักสูตร  : </td>
        <td><?= $objResult['MajorName'] ?></td>
    </tr>
    </table>
   </div>
   <div style="margin-top:15px;">
    <table width="610px;">
    <tr>
     	 <td align="right" width="130px;">ข้อมูลเฉพาะด้าน</td>
        <td width="220px;"></td>
        <td align="right" width="260"></td>
    </tr>
    </table>
</div>
       