<?php
error_reporting(0);
include 'conexion.proc.php';
include "header.php";
$consulta_actividades = "SELECT * FROM actividad";
$result_actividades = mysqli_query($con, $consulta_actividades);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Actividades</title>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>
        <div id="actividades">
            <div class="prin-img" style="margin-bottom: 15px;">

    <?php
    $actividadesArray = [];
    while ($actividad = mysqli_fetch_array($result_actividades)) {
        echo "<b style='margin-top: 15px;'>Nombre:</b> ";
        echo utf8_encode($actividad['nombre']);
        echo "<br/>";
        echo "<b>Descripción:</b> ";
        echo utf8_encode($actividad['descripcion']);
        echo "<br/>";
        echo "<b>Plazas totales:</b> ";
        echo utf8_encode($actividad['descripcion']);
        echo "<br/>";
        echo "<b>Plazas disponibles:</b> ";
        echo utf8_encode($actividad['descripcion']);
        echo "<br/>";
        echo "<b>Fecha inicio:</b> ";
        echo utf8_encode($actividad['descripcion']);
        echo "<br/>";

        $nombre_actividad = utf8_encode($actividad['nombre']) . " " . utf8_encode($contacto['apellidos']);
        $loc_lat = utf8_encode($actividad['ubicacion_lat']);
        $loc_lon = utf8_encode($actividad['ubicacion_lon']);

        $actividadesArray[] = [
            'nombre' => $nombre_actividad,
            'latitud' => (float)$loc_lat,
            'longitud' => (float)$loc_lon,
        ];
        echo "<br/>";
    }
    ?>
                <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
            </div>
        </div>
    </body>
</html>