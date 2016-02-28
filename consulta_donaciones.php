<?php
    include "header.php";
    $consulta_donaciones = "SELECT * FROM donacion";
    $result_donaciones = mysqli_query($con, $consulta_donaciones);
    $consulta_total_donaciones = "SELECT sum(cantidad) AS 'total' FROM donacion";
    $result_total_donaciones = mysqli_query($con, $consulta_total_donaciones);
    $donacion_total = mysqli_fetch_array($result_total_donaciones);
?>
    <div class="titleact">
        <h1>Donaciones</h1>
    </div>
    <div id="actividades" class="actividades">
        <div class="prin-img" style="margin-bottom: 15px;">

<?php
    $donacionesArray = [];
    while ($donacion = mysqli_fetch_array($result_donaciones)) {
        echo "<div class='actividad'> ";
        echo "<b style='margin-top: 15px;'>Cantidad:</b> ";
        echo utf8_encode($donacion['cantidad']);
        echo "<br/>";
        echo "<b>Usuario:</b> ";
        echo utf8_encode($donacion['descripcion']);
        echo "<br/>";
        echo "<b>Fecha:</b> ";
        echo utf8_encode($donacion['fecha']);
        echo "<br/>";
        echo" <a href='#'>Ver mas</a>";
        echo "<br/>";
        echo "</div>";
    }
    echo $donacion_total['total'];
?>
            <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
        </div>
    </div>
<?php
    include "footer.php";
?>