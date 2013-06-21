<?php
// MySQL connection variables
$host="localhost"; 
$username="root"; 
$password="1234"; 
$db_name="adviser"; 
$tbl_name="fw001"; 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// The auto incremented ids start at 0, but for some reason are displayed  as starting at 1, so all the ids in the variable are one above what they should be. The -1 keeps the list accurate
$id=$_GET[id]-1;

// Retrieve data from database
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
if (!$result) {
    die('Could not query:' . mysql_error());
}
//Save all the data as variables
$pdf_LastName=mysql_result($result, $id, 'LastName');
$pdf_FirstName=mysql_result($result, $id, 'FirstName');
$pdf_EMail=mysql_result($result, $id, 'EMail');

//Close database...all done with that part
mysql_close();

//Start the PDF/FDF maddness. This will only work if you have forge_fdf.php and pdftk in the current directory, both of which can be downloaded from www.pdfhacks.com. You don't have to change anything in the forge_fdf.php file. To find the official form field names to insert in the $fdf_data_strings array below, you need to run this command on your PDF with pdftk: pdftk form.pdf dump_data_fields > form.pdf.fields
// For any other help, go to www.pdfhacks.com for the full documentation of this crazy script. There is a helpful tutorial at http://www.mactech.com/articles/mactech/Vol.20/20.11/FillOnlinePDFFormsUsingHTML/index.html, and a working example at http://accesspdf.com/html_pdf_form/
// The rest of the comments were made by the author.
require_once( 'forge_fdf.php' );

$fdf_data_strings= array('form1[0].#subform[0].#area[0].LastName[0]' => $pdf_LastName, 'form1[0].#subform[0].#area[0].FirstName[0]' => $pdf_FirstName, 'form1[0].#subform[0].#area[0].EMail[0]' => $pdf_EMail);
$fdf_data_names= array();

// funny thing; for our purpose, we can get away with packing everything
// everything into fdf_data_strings; that's handy
foreach( $_REQUEST as $key => $value ) {
   // translate tildes back to periods
   $fdf_data_strings[ strtr($key, '~', '.') ]= $value;
}
// ignore these in this example
$fields_hidden= array();
$fields_readonly= array();

$fdf= forge_fdf( '',
                        $fdf_data_strings,
                        $fdf_data_names,
                        $fields_hidden,
                        $fields_readonly );

$fdf_fn= tempnam( '.', 'fdf' );
$fp= fopen( $fdf_fn, 'w' );
if( $fp ) {
   fwrite( $fp, $fdf );
   fclose( $fp );
   
   header(   'Content-type: application/pdf' );
   header(   'Content-disposition: attachment; '.
             'filename='.$pdf_FirstName.$pdf_LastName.'../pdf/FW001.pdf.pdf' );

   passthru(   'pdftk LoanAgreement.pdf fill_form '. $fdf_fn.
               ' output - flatten' );
   unlink( $fdf_fn ); // delete temp file
}
else { // error
   echo 'Error: unable to write temp fdf file: '. $fdf_fn;
}
?>