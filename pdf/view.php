<? // echo.php, report the data we received
//mb_internal_encoding("UTF-8");
//mb_http_output( "UTF-8" );
//ob_start("mb_output_handler");
mysql_connect("localhost","root","1234") or die("error host");
mysql_select_db("adviser") or die("error db");
//mysql_query("SET NAMES UTF8");
mysql_query("SET NAMES TIS620");
foreach( $_POST as $key => $value ) {
  echo '<p>Key: '.$key.' Value: '.$value.'</p>';
}
$strSQL = "INSERT INTO fw001 (field_1, field_2, field_3, field_4, field_5, field_6, field_7, field_8, field_9_1	, field_9_2, field_9_3, field_9_4, field_9_5, field_10_1, field_10_2, field_10_3, field_10_4, field_11_1, field_11_2, field_11_3, field_11_4, field_12, field_13, field_14) VALUES ('".$_POST[field_1]."','".$_POST[field_2]."','".$_POST[field_3]."','".$_POST[field_4]."','".$_POST[field_5]."','".$_POST[field_6]."','".$_POST[field_7]."','".$_POST[field_8]."','".$_POST[field_9_1]."','".$_POST[field_9_2]."','".$_POST[field_9_3]."','".$_POST[field_9_4]."','".$_POST[field_9_5]."','".$_POST[field_10_1]."','".$_POST[field_10_2]."','".$_POST[field_10_3]."','".$_POST[field_10_4]."','".$_POST[field_11_1]."','".$_POST[field_11_2]."','".$_POST[field_11_3]."','".$_POST[field_11_4]."','".$_POST[field_12]."','".$_POST[field_13]."','".$_POST[field_14]."') ";
$objQuery = mysql_query($strSQL);
		if(!$objQuery)
		{
			echo "Error Save [".mysql_error()."]";
		}
		else{
			echo $_POST[field_4];
			echo $_POST[field_5];
			echo "success";
		}
?>