<?php 
/* 
KOIVI HTML Form to FDF Parser for PHP (C) 2004 Justin Koivisto 
Version 1.1 
Last Modified: 2010-02-17 
 
    This library is free software; you can redistribute it and/or modify it 
    under the terms of the GNU Lesser General Public License as published by 
    the Free Software Foundation; either version 2.1 of the License, or (at 
    your option) any later version. 
 
    This library is distributed in the hope that it will be useful, but 
    WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
    or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public 
    License for more details. 
 
    You should have received a copy of the GNU Lesser General Public License 
    along with this library; if not, write to the Free Software Foundation, 
    Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA  
 
    Full license agreement notice can be found in the LICENSE file contained 
    within this distribution package. 
 
    Justin Koivisto 
    justin.koivisto@gmail.com 
    http://koivi.com 
*/ 
 
/** 
 * createXFDF 
 *  
 * Tales values passed via associative array and generates XFDF file format 
 * with that data for the pdf address sullpiled. 
 *  
 * @param string $file The pdf file - url or file path accepted 
 * @param array $info data to use in key/value pairs no more than 2 dimensions 
 * @param string $enc default UTF-8, match server output: default_charset in php.ini 
 * @return string The XFDF data for acrobat reader to use in the pdf form file 
 */ 
function createXFDF($file,$info,$enc='UTF-8'){ 
    $data = '<?xml version="1.0" encoding="'.$enc.'"?>'."\n";
    $data .= '<xfdf xmlns="http://ns.adobe.com/xfdf/" xml:space="preserve">'."\n"; 
    $data .= '<fields>'."\n"; 
    foreach($info as $field => $val){ 
        $data.='<field name="'.$field.'">'."\n"; 
        if(is_array($val)){ 
            foreach($val as $opt) 
                $data.='<value>'.$opt.'</value>'."\n"; 
        }else{ 
            $data.='<value>'.$val.'</value>'."\n"; 
        } 
        $data.='</field>'."\n"; 
    } 
    $data .= '</fields>'."\n";
    $data .= '<ids original="'.md5($file).'" modified="'.time().'" />'."\n";
    $data .= '<f href="'.$file.'" />'."\n";
    $data .= '</xfdf>'."\n"; 
    return $data; 
} 
mysql_connect("localhost","root","1234");
mysql_select_db("adviser");
mysql_query("SET NAMES UTF8");
$result = mysql_query("select * from fw001 WHERE formID = '".$_GET[formID]."' ");
$value = mysql_fetch_array($result);
$data = array(
	"field_1" => $value['field_1'],
	"field_2" => $value['field_2'],
	"field_3" => $value['field_3'],
	"field_4" => $value['field_4'],
	"field_5" => $value['field_5'],
	"field_6" => $value['field_6'],
	"field_7" => $value['field_7'],
	"field_8" => $value['field_8'],
	"field_9_1" => $value['field_9_1'],
	"field_9_2" => $value['field_9_2'],
	"field_9_3" => $value['field_9_3'],
	"field_9_4" => $value['field_9_4'],
	"field_9_5" => $value['field_9_5'],
	"field_10_1" => $value['field_10_1'],
	"field_10_2" => $value['field_10_2'],
	"field_10_3" => $value['field_10_3'],
	"field_10_4" => $value['field_10_4'],
	"field_11_1" => $value['field_11_1'],
	"field_11_2" => $value['field_11_2'],
	"field_11_3" => $value['field_11_3'],
	"field_11_4" => $value['field_11_4'],
	"field_12" => $value['field_12'],
	"field_13" => $value['field_13'],
	"field_14" => $value['field_14'],
);
$file_name = "http://localhost/adviser8/pdf/FW001.pdf";
$xfdf = createXFDF($file_name,$data);
header("Content-type: application/vnd.adobe.xfdf;charset=utf-8");
echo $xfdf;
?> 