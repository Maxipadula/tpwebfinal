 <html>
 <head>
 <script type="text/javascript" src="../../js/funciones/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../../js/funciones/validarAgregarReparacion.js"></script>
	
	
 </head>
		 <?php include ("reparacion_datos.php"); ?>
	<?PHP
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	?>
	<div id="divContenedor">
	<div class="divTabla">
 	
	FORMULARIO PARA TABLA REPARACION
 	<form class='contacto' method="post" action="<?php echo $validar_datos_reparacion ?>" name ="reparacion">
 		<div id="contacto">
 			
				
					
				<?php
					
					$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
					mysql_select_db ("tpFinal",$conexion) or die ("no db");
					
					 
						
				

				?>
				<div><label>Seleccione un Transporte<label>
				<?php  $consulta_transporte = mysql_query ("SELECT M.descripcion marca,MO.descripcion modelo, T.patente patente,T.id_transporte ID,E.descripcion estado,T.km_recorridos km,T.num_chasis chasis,T.num_motor motor
											 FROM estado E inner join
												  transporte T on E.id_estado = T.id_estado inner join 
											      vehiculo V on T.id_vehiculo = V.id_vehiculo inner join 
											      marca M on V.id_marca = M.id_marca inner join 
											      modelo MO on V.id_modelo = MO.id_modelo")or die (mysql_error());
					
					
						if ($row = mysql_fetch_array($consulta_transporte)){
						echo "<table border = '1'> \n";
						echo "<tr><td>MARCA</td><td>MODELO</td><td>PATENTE</td><td>ESTADO</td><td>KM RECORRIDOS</td><td>SELECCIONAR</td></tr>\n";
						do{
							echo "<tr><td>".$row["marca"]."</td><td>".$row["modelo"]."</td><td>".$row["patente"]."</td><td>".$row["estado"]."</td><td>".$row["km"].".KM</td><td class='tBotonModiff'><input type='radio' name='transporte' value='".$row["ID"]."'></input><br></td></tr> \n";     
						} while ($row = mysql_fetch_array($consulta_transporte));
						echo "</table> \n";
						
						
					} else {
						echo "<h3> No se encontraron registros </h3>";
					} 
		?>
				</br>
				</br>
				<div><label>Seleccione un Mecanico</label>
					</br>
						</div>	
							</br>
							<?php 
								$consulta_mecanico  = mysql_query ("SELECT id_mecanico ID,nombre
												FROM mecanico ") or die (mysql_error());
							
								$num_mecanicos = mysql_num_rows($consulta_mecanico);
								
								
								while($mecanico = mysql_fetch_array($consulta_mecanico)){
							
									echo "<label><input type='radio' name='mecanicos' value='".$mecanico["ID"]."'>".$mecanico["nombre"]."</input></label><br>";
								}
							?>
				 </br>			
				 </br>
				<!-- <div><label>Estado del Transporte</label>
                    </br>
                        <select name="estado" id="estado">
                        </br>
                            <option selected="selected" value="nada">Seleccione Estado
                                </option>
                                <?php
									 $consulta_estado = mysql_query ("SELECT *
                                                                     FROM estado");
								?>
								<?php
                                       
									   while ( $row = mysql_fetch_array($consulta_estado) )
                                         {
                                                                        
                                ?>
									<option value = " <?php echo $row['id_estado'] ?> "> <?php echo $row['descripcion']; ?>
                                <?php
                                     }
                                ?>
                                  </option>
                        </select>
                    </div>
				-->
				
				</br>
				
				
				<div><label>Seleccione Los Repuestos Que Se Utilizaron</label>
					</br>
						</div>	
							</br>
				<?php
				      $consulta_respuesto = mysql_query ("SELECT * 
														FROM repuesto") or die (mysql_error());
								
						while($repuesto = mysql_fetch_array($consulta_respuesto)){
									echo "<label><input type='checkbox' id='rep' name='repuesto[]}' value='".$repuesto["id_repuesto"]."' >".$repuesto["descripcion"]."</input> </label>
										<input type='text' name='".$repuesto["id_repuesto"]."' class='input' />
										<br>";
									
									
						};
						
					
				?>	
				
			        
				
			</br>
 				</br>
			

				
 				<div><label>FECHA</label>
 					</br>
 					<input type="text" name="fecha" placeholder="Formato AAAA-MM-DD" id="fecha">
 					<div id="mensaje1" class="errores"> Ingresa una fecha valida [AAAA-MM-DD]</div>
 				</div>
 				</br>

					
 		
				
							
				<input type="submit" value="Agregar" class="boton" id="boton">
 		</div>
 	</form>
	

 
 
	</div>
	</div>
 </html>