<?php
    include "header.php";
    $actividad=$_REQUEST['actividad'];
    $consulta_actividades = "SELECT * FROM actividad WHERE id_usuario = $actividad";
    $result_actividades = mysqli_query($con, $consulta_actividades);
?>
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
        echo "<b>Fecha:</b> ";
        echo utf8_encode($actividad['fecha']);
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
