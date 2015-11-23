<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	    <title>Agregar Transporte | S.G.L</title>
		
		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarTransporte.js"></script>
    </head>
    <body>
        <?php include ("transportes_datos.php"); ?><?php       
                            
                    if(!isset($_SESSION)) 
                    { 
                        session_start(); 
                    } 

                            include ('../../../rutas.php');
                    
                    $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
                    mysql_select_db ("tpFinal",$conexion) or die ("no db");
                            
                            $consulta_id= mysql_query(" SELECT MAX( id_transporte ) ID
                                                        FROM transporte ") or die ("no query");
                                             
                            
                            $fila1 = mysql_fetch_assoc($consulta_id);
                            
                            $id_transporte= $fila1["ID"];
                            
                            $id_transporte +=1111;
                            
                            
                            
                    ?>
					
			
		
        <div id="divContenedor">
            
            <p>AGREGAR TRANSPORTES:</p>

            <form action="<?php echo $validar_datos_transportes ?>" class='contacto' id="transporte" method="post"
            name="transporte">
                <div id="contacto">
                    <div>
                        <label>ID</label>
                    </br>
                        <input name="id_tr" readonly="readonly" type="text" value="<?php echo $id_transporte?>">
                    </div>
                    </br>
                    <div>
                        <label>ESTADO DEL VEHICULO</label>
                    </br>
                        <select name="estado_transporte" id="estado">
                            <option selected="selected" value="nada"> Seleccione Estado
                                </option>
                            <option value="mm">
                                Muy Malo
                            </option>
                            <option value="m">
                                Malo
                            </option>
                            <option value="r">
                                Regular
                            </option>
                            <option value="b">
                                Bueno
                            </option>
                            <option value="mb">
                                Muy Bueno
                            </option>
                        </select>
                    </div>
                    <div id="mensaje1" class="errores"> Ingrese una opcion</div>
                    <br>

                    <div>
                        <label>MARCA</label>
                    </br>
                        <select name="marca_transporte" id="marca_transporte">
                        </br>
                            <option selected="selected" value="nada">Seleccione Marca
                                </option>
                                <?php
									 $consulta_marca = mysql_query ("SELECT *
                                                                     FROM marca");
								?>
								<?php
                                       while ( $row = mysql_fetch_array($consulta_marca) )
                                         {
                                                                        
                                  ?>
                            <option value=
                            " <?php echo $row['id_marca'] ?> ">
                                <?php echo $row['descripcion']; ?>
                            <?php
                                                                    }
                                                                    ?>
                                                                    </option>
                        </select>
                    </div>
					
                    <div id="mensaje2" class="errores"> Ingrese una opcion</div>
                    </br>
                    <div>
					<span class="prueba"></span>
                        <label>MODELO</label>
                        	</br>
                         <select name="modelo_transporte" id="modelo_transporte">

                            <option selected="selected" value="nada">Seleccione Marca
                                </option>
                        </select>
                    </div>
                    <div id="mensaje3" class="errores"> Ingrese una opcion</div>
                    </br>
                    <div>
                        <label>NUMERO DE CHASIS</label>
                    	</br>
                        <input name="num_chasis" type="text" id="chasis" placeholder="Numero Chasis" />
                        <div id="mensaje4" class="errores">Ingrese solo numeros</div>
                    </div>
                    <br>

                    <div>
                        <label>NUMERO DE MOTOR</label>
                    </br>
                        <input name="num_motor" type="text" id="motor" placeholder="Numero Motor" />
                        <div id="mensaje5" class="errores">Ingrese solo numeros</div>
                    </div>
                    <br>

                    <div>
                        <label>AÑO DE FABRICACION</label>
                    </br>
                        <input name="fabricacion" type="text" id="anio" placeholder="Año Fabricación">
                        <div id="mensaje6" class="errores">Ingrese solo numeros</div>
                    </div>
                    <br>

                    <div>
                        <label>PATENTE</label>
                        </br>
                        <input name="patente" type="text" id="patente" placeholder="Patente Formato AAA000">
                        <div id="mensaje7" class="errores">Ingrese patente válida[Formato AAA000]</div>
                    </div>
                    <br>

                    <div>
                        <label>KM RECORRIDOS</label>
                    </br>
                        <input name="km" type="text" id="kmreco" placeholder="Km Recorridos">
                        <div id="mensaje8" class="errores">Ingrese solo numeros</div>
                    </div>
                    </br>
                    <input type="submit" value="Seguir" class="boton" id="boton">
                    <input type="reset" value="Borrar Todo" class="boton">
                    
                </div>
            </form>
        </div>
    </body>
</html>