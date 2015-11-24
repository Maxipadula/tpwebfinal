<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../css/login.css" TYPE="text/css">
	</head>
	
<body>
<?php include ("../rutas.php"); ?>
<div id='divHeader_chofer'>
			<div id="delog"> <a href ="../<?php echo $deslog?>">DESLOGUEAR</a></div>
			<h1> Sistema de Gestión Logistica</h1>
		</div>
	<nav id='divNav_chofer' >
		
       <ul>
           <li><a href="../<?php echo $login?>">SALIR</a></li>  
       </ul>
 
	</nav>
	<div id="divContenedor">
		<?php
			include ('../rutas.php');
			
			
			
			
			
			
		?>
			
		<h3>Escanee el codigo QR entregado e ingrese el ID </h3>
			
		<form class='contacto' method="post" action="<?php echo $validar_id_viaje?>">
		<div id="contacto">
		        </br>
				<div><label>ID DE VIAJE</label>
				</br>
				<input type="text" name="id_viaje" placeholder ="ID">
				</br></br>
				<input type="submit" name="submit" Value="Enviar" class="boton">
					
				</div>
				
				
		
			</div>
			</form>
			</div>
		</div>


		</div>
</body>

</html>