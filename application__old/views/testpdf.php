<?php 

$result_show = '<link rel="stylesheet" type="text/css" href="'.base_url().'adminassets/css/style.css">"<h1>keyur</h1>';


$result_show =  str_replace("\'","'",$result_show);
$result_show  = str_replace('\"', '"', $result_show);
$slash = '\\';

$result_show  = str_replace($slash,"", $result_show);
echo VIEWPATH;
include 'C:/xampp/htdocs/newmyprimetime/application/third_party/simple_html_dom.php';
//require_once('../application/third_party/dompdf/autoload.inc.php');

 $domdpf = new DOMPDF();
 $domdpf -> loadHtml('<h1>HELLO WORLD</h1>');
 $domdpf -> setPaper('A4','Landscape');
 $domdpf ->render();

 $domdpf->stream();



?>
