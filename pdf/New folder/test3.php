<?PHP
header('Content-type: application/vnd.fdf; charset=utf-8');
//header("Content-type:text/xml; charset=UTF-8");      
include "../connect.php";
$strSQL = "SELECT * FROM fw001 WHERE formID = 1";
$sqlquery = mysql_query($strSQL);
$row_fw = mysql_fetch_array($sqlquery);
mysql_query("set character set utf8");  

$form = 'http://localhost/adviser8/pdf/FW001.pdf';


function create_fdf ($pdffile, $strings, $keys)
{
    $fdf = "%FDF-1.2\n%test\n";
    $fdf .= "1 0 obj \n<< /FDF << /Fields [\n";

    foreach ($strings as $key => $value)
    {
    $fdf .= "<< /T ($key) /V ($value) >> \n";
    }

    $fdf .= "]\n/F ($pdffile) >>";
    $fdf .= ">>\nendobj\ntrailer\n<<\n";
    $fdf .= "/Root 1 0 R \n\n>>\n";
    $fdf .= "%%EOF";
	
    return $fdf;
}

// Output the PDF form, with form data filled-in
//header('Content-type: text/html; charset=utf-8');
// Fill in text fields
$strings = array("field_1" => $row_fw[field_1],"field_2" => $row_fw[field_2],"field_3" => $row_fw[field_3],"field_4" => $row_fw[field_4],"field_5" => $row_fw[field_5],"field_6" => $row_fw[field_6],"field_7" => $row_fw[field_7],"field_8" => $row_fw[field_8],"field_9_1" => $row_fw[field_9_1],"field_9_2" => $row_fw[field_9_2],"field_9_3" => $row_fw[field_9_3],"field_9_4" => $row_fw[field_9_4],"field_9_5" => $row_fw[field_9_5],"field_10_1" => $row_fw[field_10_1],"field_10_2" => $row_fw[field_10_2],"field_10_3" => $row_fw[field_10_3],"field_10_4" => $row_fw[field_10_4],"field_11_1" => $row_fw[field_11_1],"field_11_2" => $row_fw[field_11_2],"field_11_3" => $row_fw[field_11_3],"field_11_4" => $row_fw[field_11_4],"field_12" => $row_fw[field_12],"field_13" => $row_fw[field_13]);
$keys = array();
echo create_fdf($form, $strings, $keys);

?>

