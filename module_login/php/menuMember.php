 <?
	session_start();
	if($_SESSION['userID'] != '' && $_GET[mod]!='')
	{
?>	
<div style=" float:right; margin-right:20px;"><a class="m-button m-button-red" href="module_login/php/logout.php">ออกจากระบบ</a></div>
<? } ?>

 <? if ($_GET['mod']=="register" || $_GET['mod']=="ForgotPassword"){ ?>
        <div style=" float:right; margin-right:20px;"><a class="m-button m-button-red" href="index.php?mod=login">เข้าสู่ระบบ</a></div>
 <? } ?>
<? if ($_GET['mod']=="login"){ ?>
        <div style=" float:right; margin-right:20px;"><a class="m-button m-button-red" href="index.php?mod=register">สมัครสมาชิก</a></div>
 <? } ?>

 <style>
 	.m-button{
		display:inline-block;
		min-width:46px;
		text-align:center;
		font-size:11px;
		font-weight:bold;
		height:27px;
		padding:0 8px;
		line-height:27px;
		-webkit-border-radius::2px;
		border-radius:2px;
		-webkit-transition:all 0.218s;
		transition:all 0.218s;
		-webkit-user-select:none;
		cursor:default;
	}
	.m-button-red{
		color:#fff;
		border:1px solid transparent;
		text-shadow:0 1px rgba(0,0,0,0.1);
		text-transform:uppercase;
		background-color:#d14836;
		background-image:-webkit-linear-gradient(top,#dd4b39,#d14836);
	}
 </style>