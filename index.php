<?php
    include "header.php";
    

    $fecha = date("Y-m-d h:i:s");
    // Peticiones Ofrezco
    $consulta_actividades = "SELECT actividad.id, actividad.nombre, actividad.fecha, actividad.img, actividad.direccion, tipo_actividad.nombre AS 'ntact' FROM actividad LEFT JOIN tipo_actividad ON actividad.id_tipo_actividad=tipo_actividad.id WHERE actividad.peticion = 0 AND actividad.fecha >= '$fecha' ORDER BY actividad.fecha DESC";
    $result_actividades = mysqli_query($con, $consulta_actividades);

    // Peticiones Necesito
    $consulta_actividades2 = "SELECT actividad.id, actividad.nombre, actividad.fecha, actividad.img, actividad.direccion, tipo_actividad.nombre AS 'ntact' FROM actividad LEFT JOIN tipo_actividad ON actividad.id_tipo_actividad=tipo_actividad.id WHERE actividad.peticion = 1 AND actividad.fecha >= '$fecha' ORDER BY actividad.fecha DESC";
    $result_actividades2 = mysqli_query($con, $consulta_actividades2);

    $consulta_actividad = ("SELECT * FROM tipo_actividad");
    $result_actividad = mysqli_query($con, $consulta_actividad);
?>
<br />
<br />

<?php
    include "with-jquery.html";
?>

<!-- TIPO ACTIVIDAD -->
<br></br>
<form action="index.php" method="get">
 <span style="color:black;">Filtrar por:</span>
                <select id="tipo_actividad" name="tipo_actividad" onchange="this.form.submit()">
                    <option value="">Seleccionar actividad</option>
                    <?php
                    while($fila=mysqli_fetch_array($result_actividad)){
                        echo utf8_encode("<option value=\"$fila[id]\">$fila[nombre]</option>");
                    }
                    ?>
                </select></br><br>
                <!-- <button class="btn btn-success" id="botonEnviar" type="submit">Enviar</button> -->
                <!--  -->
                </form>

<?php
    include 'resultados_actividades.php';
    include "footer.php";
?>
