
        <div style=" font-size:20px; margin-left:10px; margin-top:15px; color:#333"><img src="image/label_new.png" style="width:30px; height:30px;" />ข่าวประชาสัมพันธ์</div>
        <div style="margin-top:20px; margin-right:20px; ">
				<?
                    include ("connect.php");
                    $strSQL = "SELECT * FROM new";
                    $objQuery = mysql_query($strSQL);
                    while($row_new = mysql_fetch_array($objQuery)){
                ?>
              <div style="color:#006; margin-left:50px;"><?=$row_new[title]?></div>
              <div style="margin-left:70px; color:#06C; padding-bottom:10px; margin-right:20px; "><?=$row_new[detail]?></div>
            <? } ?>	
             </div>