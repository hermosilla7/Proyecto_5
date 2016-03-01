<?php
    include "header.php";
    //recogida de variable de index
    $consulta_actividades = "SELECT * FROM actividad WHERE id = $_REQUEST[actividad]";
    $result_actividades = mysqli_query($con, $consulta_actividades);
?>
    <div class="titleact">
        <h1>Actividad</h1>
    </div>
    <div id="actividades" class="actividades">
        <div class="prin-img" style="margin-bottom: 15px;">
          <?php
             while ($actividad = mysqli_fetch_array($result_actividades)) {
                 echo "<div class='actividad'> ";
                 echo '<img src="img/actividades/'.$actividad[img].'" alt="" />';
                 echo "<br/>";
                 echo "<b style='margin-top: 15px;'>Nombre:</b> ";
                 echo utf8_encode($actividad['nombre']);
                 echo "<br/>";
                 echo "<b>Descripción:</b> ";
                 echo utf8_encode($actividad['descripcion']);
                 echo "<br/>";
                 echo "<b>Fecha:</b> ";
                 echo utf8_encode($actividad['fecha']);
                 echo "<br/>";
                 echo "</div>";
             }
          ?>
        </div>
    </div>
    <div id="map" width="200px" height="200px"></div>

    <div class="subir">
      <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
    </div>
<?php
    include "footer.php";
?>
