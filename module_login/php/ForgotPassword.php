<div style="border:1px solid #e5e5e5; width:380px;">
<form name="idForgot" id="idForgot">
	<table align="center" id="register" width="90%" border="0" style="margin-bottom:15px;"> 
    	<tr>
        	<td colspan="2" align="left" height="50"><label style="font-size:23px;font-weight:bold;color:#666;">หากมีปัญหาในการลงชื่อเข้าใช้</label></td>
        </tr>
        <tr>
        	<td>
              ระบุชื่อเข้าใช้งาน หรือ ที่อยู่อีเมล
            </td>
        </tr>
    	<tr>
            <td width="300px;"><input size="40px;" name="txtForgot" type="text" id="txtForgot"></td>
        </tr>
        <tr>
        	<td>
              <input type="submit" value="submit" />
            </td>
        </tr>
  </table>
</form>
</div>
<script language="javascript">
$(document).ready(function(){
		$("#idForgot").submit(function(event) {
     			event.preventDefault();
				$.post('module_login/php/SendPassword.php',$('#idForgot').serialize(),function(response){
					if(response=="success"){
						alert("ระบบได้ทำการส่ง ชื่อเข้าใช้งานและรหัสผ่านไปยังอีเมล์ที่ท่านได้ทำการสมัครสมาชิกเรียบร้อยแล้ว");
						window.location=window.location;
					}
					else{
						alert(response);
						}
				});
      	});
});
</script>