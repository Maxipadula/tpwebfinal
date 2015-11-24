<html>
	<head>
	<meta charset="UTF-8">
		<title>Agregar User | S.G.L</title>
		
		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarUsuarios.js"></script>
		
		<LINK REL="Stylesheet" HREF="../Css/login.css" TYPE="text/css">
	</head>
 <body>

 <?php include ("usuarios_datos.php"); ?>
	<?PHP
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_usuario ) ID
                                        FROM usuario ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_usuario= $fila1["ID"];
			
			$id_usuario +=10;
	?>
 	<div id="divContenedor">
 	</br>
 	<p>DATOS DEL USUARIO A AGREGAR</p>

 	<form class='contacto' method="post" action="<?php echo  $validar_usuario ?>">
 		<div id="contacto">
 				</br>
 				<div><label>ID</label>
					</br>
					<input type="text" name="id_usuario"  value="<?php echo $id_usuario?>"readonly = "readonly">
 				</div>	
 				</br>
				
 				<div><label>USUARIO</label>
 					</br>
 					<input type="text" name="usuario" id="usuario" placeholder="Usuario">
 					<div id="mensaje1" class="errores"> Ingresa un usuario</div>
 				</div>
 				</br>
 								
 				<div><label>NOMBRE</label>
 					</br>
 					<input type="text" name="nombre" id="name" placeholder="Nombre">
 					<div id="mensaje2" class="errores"> Ingresa nombre valido</div>
 				</div>
 				</br>
				
 				<div><label>CONTRASEÑA</label>
 					</br>
 					<input type="password" name="pass" id="pass" placeholder="Contraseña">
 					<div id="mensaje3" class="errores"> Ingresa contraseña</div>
 				</div>
 				</br>
				
 				<div><label>FECHA DE NACIMIENTO</label>
 					</br>
 					<input type="text" name="fecha_nacimiento" id="fnac" placeholder="AAAA-MM-DD">
 					<div id="mensaje4" class="errores"> Ingresa fecha valida [AAAA-MM-DD]</div> 				
 				</div>
 				</br>
				
 				<div><label>TIPO DE DOCUMENTO
 					</br>
					 <select name="id_tipo_documento"> 
					 <option value="vacio" selected=""></option>
					 <option value="DNI">DNI</option>
                     <option value="Libreta Enrolamiento">Libreta de enrolamiento</option>
                     <option value="Libreta Civica">Libreta civica</option>
                     </select>
 				</label>
 				</div>
 				</br>
				
 				<div><label>NUMERO DE DOCUMENTO</label>
 					</br>
 					<input name="num_doc" type="text" id="numDoc" class="numDoc" placeholder="Documento" />
 					<div id="mensaje5" class="errores"> Ingresa solo numeros</div>
 				</div>
 				</br>		

				<div><label>TIPO DE LICENCIA
 					</br>
					 <select name="id_lic">    
					<?php								
					$consulta_lic= mysql_query ("SELECT id_licencia
												FROM licencia");
					?>
					<?php
					while ( $row = mysql_fetch_array($consulta_lic) )
					{
					
				?>				
				  <option value="<?php echo $row["id_licencia"] ?>" >
				  <?php echo $row["id_licencia"]; ?>
				  </option>
			    <?php } ?>
                     </select>
 				</label>
 				</div>
				
 				</br>
				
				<div>
				<label>ROL
				</br>
					<select name="rol">    
						<?php $consulta_rol= mysql_query ("SELECT descripcion FROM rol");?>
						<?php while ( $row2 = mysql_fetch_array($consulta_rol) )
						{ ?>				
				  	<option value="<?php echo $row2["descripcion"] ?>" >
					<?php echo $row2["descripcion"]; ?>
				  	</option>
			    	<?php } ?>
			    	</select>
			    </label>
			    </div>
				</br>
				<input name="submit" type="submit" value="Agregar" id="boton" class="boton" />
				<input type="reset" value="Borrar Todo" class="boton" />
 	</form>
 	</div>
 </div>
 </body>
</html>