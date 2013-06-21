<?
	//header("Content-type:text/xml; charset=UTF-8");
	//header("Cache-Control: no-store, no-cache, must-revalidate");             
	//header("Cache-Control: post-check=0, pre-check=0", false); 
	$con = mysql_connect("localhost","root","1234") or die("error host");
	$db = mysql_select_db("adviser") or die("error db");
	mysql_query("SET NAMES UTF8");
	//mysql_query("SET character_set_results=utf8");
	//mysql_query("SET character_set_client=utf8");
	//mysql_query("SET character_set_connection=utf8");
?>