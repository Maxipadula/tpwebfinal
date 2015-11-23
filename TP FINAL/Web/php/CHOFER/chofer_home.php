<html>
	<head>

	</head>
	
	<body>
		
		<?PHP
		
		/*
		include('../lib/full/qrlib.php');
		include('config.php');

		$tempDir = EXAMPLE_TMP_SERVERPATH;

		$name = 'John Doe';
		$phone = '(049)012-345-678';

		$codeContents = 'BEGIN:VCARD'."\n";
		$codeContents .= 'FN:'.$name."\n";
		$codeContents .= 'TEL;WORK;VOICE:'.$phone."\n";
		$codeContents .= 'END:VCARD';

		QRcode::png($codeContents, $tempDir.'025.png', QR_ECLEVEL_L, 3);

		echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'025.png" />';
		*/
	        session_start();
			
			include ("../rutas.php");
			
			$permiso = "chofer home";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../permiso.php");
	
							
	        if ( isset ($_SESSION["nombre"])){
		
	          $nombre = $_SESSION["nombre"];
	        }
	        else{
		     session_destroy();
    
              header("location:".$login."");
	        }
			
		
        ?> 
		
		
	
	<?php include ("menu_chofer.php");?>
				
				
		
	</body>
</html>