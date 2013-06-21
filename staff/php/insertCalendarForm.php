<? session_start(); ?>
<?
include('connect.php');
	$strSQL = "SELECT * FROM user INNER JOIN faculty ON user.FacultyID = faculty.FacultyID WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<form id="idInsertCalendarForm">
<div style="width:700px; border:1px solid #e5e5e5;">
	<table style=" margin-top:10px; text-align:left; width:580px;" align="center">    
    <tr>
    	<th colspan="4" align="center" style="padding-bottom:10px;">
        	เพิ่มปฏิทินนัดหมาย
        </th>
    </tr>
        <tr>
            <th width="60px;">คณะ: </th>
            <th><input type="text" value="<?= $objResult['FacultyName'] ?>" readonly /><input type="hidden" name="insertFacultyID" value="<?= $objResult['FacultyID'] ?>" /></th>
            <th width="100px;">&nbsp;&nbsp;ผู้่จัดทำ: </th>
            <th><input type="text" value="<?= $objResult['name']."   ".$objResult['surname'] ?>" readonly /><input type="hidden" name="insertUserID" value="<?= $objResult['userID'] ?>" /></th>      
        </tr>       
        <tr>
            <th width="60px;">วันที่: </th>
            <th><input type="text"name="insertDate" /></th>
            <th width="100px;">&nbsp;&nbsp;ปีการศึกษา: </th>
            <th><input type="text"name="insertYear" /></th>
        </tr>
        <tr>
        	<th colspan="4">------------------------------------------------------------------------------------------------------------------</th>
        </tr>
        </table>
        <div style="float:left">
        <table style=" margin-top:10px;  text-align:left; margin-left:60px;">   
        <tr>
            <th colspan="3" align="left">ภาคเรียนที่ 1: </th>
       </tr>
       <tr>
       		<th width="60px;">ครั้งที่ 1</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr> 
        <tr>
       		<th width="60px;">ครั้งที่ 2</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>   
        <tr>
       		<th width="60px;">ครั้งที่ 3</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>   
        <tr>
       		<th width="60px;">ครั้งที่ 4</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>    
        <tr>
       		<th width="60px;">ครั้งที่ 5</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>   
        <tr>
       		<th width="60px;">ครั้งที่ 6</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>  
        </table>
        </div>
        <div style="float:right">
       <table style=" margin-top:10px;  text-align:left; margin-right:60px;">    
        <tr>
            <th colspan="4" align="left">ภาคเรียนที่ 2: </th>
       </tr>
       <tr>
       		<th width="60px;">ครั้งที่ 1</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>    
        <tr>
       		<th width="60px;">ครั้งที่ 2</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>     
        <tr>
       		<th width="60px;">ครั้งที่ 3</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>      
        <tr>
       		<th width="60px;">ครั้งที่ 4</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>   
        <tr>
       		<th width="60px;">ครั้งที่ 5</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr>    
        <tr>
       		<th width="60px;">ครั้งที่ 6</th>
            <th>&nbsp;&nbsp;วันที่ :</th>
            <th><input class="datepicker" type="text"name="insertNumber" /></th>
        </tr> 
        </table>
        </div>
        <div style="clear:both"></div>
      <table style=" margin-top:10px; text-align:left;" align="center">  
      <tr>
        	<th colspan="4">------------------------------------------------------------------------------------------------------------------</th>
        </tr>      
        <tr>
        	<th style="padding-top:20px;" colspan="4" align="center"><input type="submit" value="submit" name="submit" /><input type="reset" value="reset" /></th>
        </tr>        
    </table>
    </div>
</form>
<script language="javascript">
$(document).ready(function(){
		$("#idInsertCalendarForm").submit(function(event) {
     			event.preventDefault();
				$.post('sql/insertCalendar.php',$('#idInsertCalendarForm').serialize(),function(response){
					if(response=="success"){
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