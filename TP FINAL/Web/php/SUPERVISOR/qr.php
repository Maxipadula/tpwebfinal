<?php
	
	include ('../../phpqrcode/qrlib.php');
	$size = 5;
	
	$param = $_GET['id'];
	$codeText = 'La ID de tu viaje es: '.$param;
    QRcode::png($codeText);
?>