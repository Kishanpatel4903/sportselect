<?php
echo "ses";
die;

require_once "dompdf/autoload.inc.php";
		
		$dompdf = new Dompdf\DOMPDF();
		print_r($dompdf);
?>