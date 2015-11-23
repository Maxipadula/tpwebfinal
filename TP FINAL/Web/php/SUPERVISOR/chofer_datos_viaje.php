<html>
	<head>
	</head>
	
	<body>
		<?php
			 session_start();
			 
			 $permiso ="chofer_datos_viaje";
			 
			 $id = $_SESSION["id_usuario"];
			
			 
			 	include ('../rutas.php');
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			 
			 permisos($permiso,$id);
			 
			 function permisos ($permiso,$id){
				
				$consulta1 = mysql_query("	SELECT p.descripcion permiso
						                    FROM usuario u join 
							                     rol r on u.codigo_rol = r.codigo_rol join
								                 permiso p on r.codigo_rol = p.codigo_rol
	                                        WHERE u.id_usuario= '".$id."' and p.descripcion = '".$permiso."'");
							
							$fila = mysql_fetch_assoc($consulta1);
	
			
		
							if($fila["permiso"] != $permiso)
								die("NO TIENES PERMISO");
		
			}	
				$consulta2 = mysql_query("	SELECT *
						                    FROM viaje v
	                                        WHERE fecha_inicio = ( select MAX(fecha_inicio)
																	FROM viaje vi join usuario u on vi.id_usuario = u.id_usuario
																	WHERE u.id_usuario= '".$id."'
																	)");
				
                $fila1= mysql_fetch_assoc($consulta2);	
				
				
				
				$origen = $fila1["origen"] ;
				$destino = $fila1["destino"];
				$fecha_inicio = $fila1["fecha_inicio"];
				$carga = $fila1["carga"];
				$nombre =$_SESSION["nombre"];
	        
		?>
			<h2> DATOS DE VIAJE  </h2>
			
			<form class='contacto' method="post" action="<?php echo $validar_datos_viaje ?>">
			<div id="contacto">
				
				</br>
				<div><label>NOMBRE CHOFER
					<input type="text" name="chofer_viaje" value="<?php echo $nombre?>"readonly = "readonly">
					</label>
				</div>
				
				</br>
				
				<div><label>LUGAR ORIGEN
					<input type="text" name="lugar_origen_viaje" value="<?php echo $origen ?>"readonly = "readonly">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>LUGAR DESTINO
					<input type="text" name="lugar_destino_viaje" value="<?php echo $destino ?>"readonly = "readonly">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>FECHA DE INICIO
					<input type="datetime" name="fecha_inicio_viaje" value="<?php echo $fecha_inicio ?>"readonly = "readonly">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>CARGA
					<input type="text" name="carga_viaje" value="<?php echo $carga ?>"readonly = "readonly">
					</label>
				</div>
				</br>
			  <p>

				<input type="button" onclick="history.back()" name="volver atrás" value="VOLVER">
                </p>
		
	</body>
</html>