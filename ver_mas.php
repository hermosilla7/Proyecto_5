<?php
    include "header.php";
    //recogida de variable de index
    $consulta_actividades = "SELECT * FROM actividad WHERE id = $_REQUEST[actividad]";
    $result_actividades = mysqli_query($con, $consulta_actividades);
?>

  </head>
  <body>
     <div class="titleact">
       <h1>Actividad</h1>
   </div>
   <div id="actividades" class="actividades">
       <div class="prin-img" style="margin-bottom: 15px;">
          <?php
             while ($actividad = mysqli_fetch_array($result_actividades)) {
                 echo "<div class='actividad'> ";
                 echo '<img src="img/actividades/'.$actividad[img].'" alt="" />';
                 echo "<br/><br/>";
                 echo "<b style='margin-top: 15px;'>Nombre:</b> ";
                 echo utf8_encode($actividad['nombre']);
                 echo "<br/>";
                 echo "<b>Descripción:</b> ";
                 echo utf8_encode($actividad['descripcion']);
                 echo "<br/>";
                 echo "<b>Fecha:</b> ";
                 echo utf8_encode($actividad['fecha']);
                 echo "<br/>";
                 echo "<b>Dirección:</b> ";
                 echo utf8_encode($actividad['direccion']);
                 echo "<br/><br/>";
                 echo '<div id="map"></div>';
                 echo '<script type="text/javascript">var myLat='.$actividad['ubicacion_lat'].'</script>';
                 echo '<script type="text/javascript">var myLng='.$actividad['ubicacion_lon'].'</script>';
                 echo "</div>";
             }
          ?>
       </div>
   </div>

    <script>
      var map=null,myZoom=15,myLat,myLng;

      function initMap() {

          //nuevo objeto mapa
          map = new google.maps.Map(document.getElementById('map'), {
            zoom: myZoom,
            center: {lat: myLat, lng: myLng}
          });

          //nuevo objeto marker
          var marker = new google.maps.Marker({
            position: {lat: myLat, lng: myLng},
            icon: 'img/green.png',
            map: map
          });

          //evento que se ejecuta al arrastrar el marker
          google.maps.event.addListener(marker, 'click', function(){
             window.open('http://maps.google.com/maps?q='+myLat+','+myLng+'&hl=es');
          });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmihl9cGb7phazsa5HoQebsd4Eyv0B4T0&signed_in=true&callback=initMap">//felipe iglesias</script>
    <div class="subir">
      <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
    </div>
<?php
    include "footer.php";
?>
