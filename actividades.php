<?php
session_start();
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
        <div class="titleact">
            <h1>Actividades</h1>
        </div>
        <div id="actividades" class="actividades">
            <div class="prin-img" style="margin-bottom: 15px;">

    <?php
    $actividadesArray = [];
    while ($actividad = mysqli_fetch_array($result_actividades)) {
        echo "<div class='actividad'> ";
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
        echo" <a href='#'>Ver mas</a>";
        echo "<br/>";
        echo "</div>";
    }
    ?>
                <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
            </div>
        </div>
        <?php
include "footer.php";
?>
    </body>
</html>