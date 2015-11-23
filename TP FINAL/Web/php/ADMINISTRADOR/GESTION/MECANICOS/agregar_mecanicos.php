 <html>
 <head>
 			<title>Agregar Mecanico | S.G.L</title>
		
		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarMecanico.js"></script>
 </head>
 <body>
 <?php include ("mecanicos_datos.php");?>
 

	<?PHP	
	
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_mecanico ) IDM
                                        FROM mecanico ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_mecanico= $fila1["IDM"];
			
			$id_mecanico +=1;
	?>
	<div id="divContenedor">
 	<h3>FORMULARIO PARA TABLA MECANICO: </h3>
 	<form class='contacto' method="post" name="mecanico" action="<?php echo $validar_datos_mecanicos ?>">
 		<div id="contacto">
 				<div><label>ID
					</br>
					<input type="text" name="id_me"  value="<?php echo $id_mecanico?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
 				<div><label>NOMBRE Y APELLIDO
 					</br>
 					<input type="text" name="nombre" id="name" />
 					<div id="mensaje1" class="errores"> Ingresa solo letras</div>
 				</label>
 				</div>
 				</br>
				
		
				
				<input type="radio" name="internoexterno" value="interno" >Interno</input>
				<br>
				<input type="radio" name="internoexterno" value="externo" onclick="document.mecanico.empresa.disabled=!document.mecanico.empresa.disabled">Externo</input>
			
				<br>
				Empresa
				<input type ="text" name="empresa" disabled>
				<div id="mensaje2" class="errores"> Ingrese una empresa</div>
				<br><br>
				<input type="submit" value="Agregar" class="boton" id="boton">
				

 		</div>
 	</form>
	
	</div>
 </body>
 </html>