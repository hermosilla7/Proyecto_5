<?php
    include "header.php";

    $id_usuario = $_SESSION['id'];

    //recogida de variable de index
    $consulta_actividades = "SELECT actividad.*, usuario.id AS 'iusu', usuario.nombre AS 'nusu', usuario.apellidos, usuario.correo, usuario.telefono FROM actividad LEFT JOIN usuario ON actividad.id_usuario = usuario.id WHERE actividad.id = $_REQUEST[actividad]";
    $result_actividades = mysqli_query($con, $consulta_actividades);

    $consulta_trueque = "SELECT * FROM trueque WHERE id_actividad = $_REQUEST[actividad]";
    $result_trueque = mysqli_query($con, $consulta_trueque);
    $trueque = mysqli_fetch_array($result_trueque);
?>
    <?php
      while ($actividad = mysqli_fetch_array($result_actividades)) {
    ?>
    <div class="titleact">
      <h1>
        <?php
          echo utf8_encode($actividad['nombre']);
        ?>
      </h1>
    </div>
    <div id="actividades" class="actividades">
      <div class="prin-img" style="margin-bottom: 15px;">
        <?php
          echo "<div class='actividad'> ";
            echo "<div class='boton'>";
			 if (isset($_SESSION['mail'])){
          if(($actividad['estado'] == 0) && ($actividad['id_usuario'] != $id_usuario)){
            echo "<a href='reservar_actividad.proc.php?creador=".$actividad['id_usuario']."&actividad=".$actividad['id']."'><i class='fa fa-thumbs-up'></i>¡Lo quiero!</a>";
          } else if(($actividad['estado'] == 2) && ($trueque['id_usuario_realiza'] == $id_usuario)){
            echo "<a href='cancelar_actividad.proc.php?creador=".$actividad['id_usuario']."&actividad=".$actividad['id']."'><i class='fa fa-times'></i>¡Cancelar!</a>";
          } else if($actividad['id_usuario'] == $id_usuario){
            echo "<a href='modificar_actividad.php?actividad=".$actividad['id']."'><i class='fa fa-pencil'></i>Modificar</a>";
          }
	  }
          echo "</div>";
          if (file_exists($fichero) && (($ofrezco['img']) != '')) {
<<<<<<< HEAD
            echo '<img src="img/actividades/'.$actividad[img].'" alt="" />';
=======
            echo '<img src="img/actividades/'.$actividad[img].'" alt="" />';       
>>>>>>> 30a394981dc4cc94406b0425cd90eb4acafa4fdc
          } else {
            echo "<img src ='img/no_disponible.jpg'  /><br />";
          }
          echo "<br/><br/>";
          echo "<b>Creador: </b>";
          echo utf8_encode($actividad['nusu'])." ".utf8_encode($actividad['apellidos']);
          echo "<br/><br/>";
          echo "<b>Correo: </b>";
          echo utf8_encode($actividad['correo']);
          echo "<br/><br/>";
          echo "<b>Teléfono: </b>";
          echo utf8_encode($actividad['telefono']);
          echo "<br/><br/>";
          echo "<b>Descripción:</b> ";
          echo utf8_encode($actividad['descripcion']);
          echo "<br/><br/>";
          echo "<b>Fecha:</b> ";
          echo utf8_encode($actividad['fecha']);
          echo "<br/><br/>";
          echo "<b>Dirección:</b> ";
          echo utf8_encode($actividad['direccion']);
          echo "<br/><br/>";
<<<<<<< HEAD

=======
    
>>>>>>> 30a394981dc4cc94406b0425cd90eb4acafa4fdc
          echo "</div>";
          echo '<div id="map"></div>';
          echo '<script type="text/javascript">var myLat='.$actividad['ubicacion_lat'].'</script>';
          echo '<script type="text/javascript">var myLng='.$actividad['ubicacion_lon'].'</script>';
       }
    ?>
      </div>
   </div>

   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmihl9cGb7phazsa5HoQebsd4Eyv0B4T0&signed_in=true&callback=initMap"></script>
    <div class="subir">
      <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
    </div>
<?php
    include "footer.php";
?>
