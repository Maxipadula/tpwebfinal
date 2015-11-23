<!DOCTYPE html>
<html>
    <head>
        <title>
            Eliminar Vehiculo | S.G.L
        </title>
        <script src="../../../../js/funciones/jquery-1.11.3.min.js" type="text/javascript">
        </script>
        <script src="../../../../js/funciones/validarEliminar.js" type="text/javascript">
        </script>
        <link href="../Css/login.css" rel="Stylesheet" type="text/css">
    </head>
    <body>
        <?php include("vehiculos_datos.php"); ?>
        <div id="divContenedor">
            <p>
                SELECCIONAR EL MODELO DE VEHICULO QUE QUIERAS ELIMINAR
            </p>

            <div class="divTabla">
                <?php
                        
                            include ('../../../rutas.php');
                    
                    $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
                    mysql_select_db ("tpFinal",$conexion) or die ("no db");
                        
                        $consulta  = mysql_query ("SELECT U.id_vehiculo ID, IM.descripcion descri, MA.descripcion descrip, U.capacidad_carga  cap
                                                    FROM vehiculo U inner join
                                                    modelo IM on U.id_modelo = IM.id_modelo inner join 
                                                    marca MA on U.id_marca = MA.id_marca") or die ("no q");
                            
                        if ($row = mysql_fetch_array($consulta)){
                            echo "<table> \n";
                            echo "<tr><td>Modelo</td><td>Marca</td><td>Capacidad de Carga</td></tr> \n";
                            do{
                                echo "<tr><td>".$row["descri"]."</td><td>".$row["descrip"]."</td><td>".$row["cap"]."</td><td class='tBotonELim'><a href='".$validar_eliminacion_vehculos."?ID=".$row["ID"]."' class='tLink'>Eliminar</a></td></tr> \n";     
                            } while ($row = mysql_fetch_array ($consulta));
                            echo "</table> \n";
                        } else {
                            echo "no se encontraron ningun registro";
                        } 

                ?>
            </div>
        </div>
    </body>
</html>