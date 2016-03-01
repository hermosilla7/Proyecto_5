<?php
    include "header.php";

    $fecha = date("Y-m-d h:i:s");
    // Peticiones Ofrezco
    $consulta_actividades = "SELECT actividad.id, actividad.nombre, actividad.fecha, actividad.img, actividad.direccion, tipo_actividad.nombre AS 'ntact' FROM actividad LEFT JOIN tipo_actividad ON actividad.id_tipo_actividad=tipo_actividad.id WHERE actividad.peticion = 0 AND actividad.fecha >= '$fecha' ORDER BY actividad.fecha DESC";
    $result_actividades = mysqli_query($con, $consulta_actividades);

    // Peticiones Necesito
    $consulta_actividades2 = "SELECT actividad.id, actividad.nombre, actividad.fecha, actividad.img, actividad.direccion, tipo_actividad.nombre AS 'ntact' FROM actividad LEFT JOIN tipo_actividad ON actividad.id=tipo_actividad.id WHERE actividad.peticion = 1 AND actividad.fecha >= '$fecha' ORDER BY actividad.fecha DESC";
    $result_actividades2 = mysqli_query($con, $consulta_actividades2);
?>
<br />
<br />

<?php
    include "with-jquery.html";
?>

<div class="content">
    <div class="destacado">
        <div class="titlofrezco">
            <h1>Ofrezco</h1>

            <?php
                if (isset($_SESSION['id'])){
            ?>
            <a href="ofrezco_necesito_insert.php"><img src="img/plus.png" /></a>
            <?php
                }
            ?>
        </div>

        <?php

            while ($ofrezco = mysqli_fetch_array($result_actividades)){
                $fichero = "img/$ofrezco[img]";
                if (file_exists($fichero) && (($ofrezco['img']) != '')) {
                    echo "<div class='notic' >";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'><h1>".utf8_encode($ofrezco['nombre'])."</h1></a><br />";
                     echo"<div class='notcont'>";
                echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($ofrezco['ntact']).".<br /><br />";
                echo "<h2>Fecha: </h2><br />".$ofrezco['fecha'].".<br /><br />";

                echo "<h2>Dirección: </h2><br />".utf8_encode($ofrezco['direccion']).".<br /><br />";

                echo "<h2>Monedas: 10</h2><br /><br />";
                echo "</div>";
                    echo"<div class='notimg'>";
                    echo "<img src='$fichero' width='60%' /><br />";
                     echo"</div>";
                } else {
                    echo "<div class='notic'>";
                    echo  "<a href='ver_mas.php?actividad=".$ofrezco['id']."'><h1>".utf8_encode($ofrezco['nombre'])."</h1></a><br />";
                     echo"<div class='notcont'>";

                   echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($ofrezco['ntact']).".<br /><br />";
                echo "<h2>Fecha: </h2><br />".$ofrezco['fecha'].".<br /><br />";

                echo "<h2>Dirección: </h2><br />".utf8_encode($ofrezco['direccion']).".<br /><br />";
                echo "<h2>Monedas: 10</h2><br /><br />";
                echo "</div>";
                     echo"<div class='notimg'>";
                    echo "<img src ='img/no_disponible.jpg'width='40%' /><br />";
                     echo"</div>";
                }
                echo "</div>";
            }
        ?>
    </div>
</div>
<div class="content">
    <div class="necesito">
        <div class="titlofrezco">
        <h1>Necesito</h1>
        <?php
            if (isset($_SESSION['id'])){
        ?>
        <a href="ofrezco_necesito_insert.php"><img src="img/plus.png" /></a>
        <?php
            }
        ?>
    </div>

        <?php

            while ($necesito = mysqli_fetch_array($result_actividades2)){
                $fichero = "img/$necesito[img]";
                if (file_exists($fichero) && (($necesito['img']) != '')) {
                    echo "<div class='notic'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'><h1>".utf8_encode($necesito['nombre'])."</h1></a><br />";
                     echo"<div class='notcont'>";
                echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($necesito['ntact']).".<br /><br />";
                echo "<h2>Fecha: </h2><br />".$necesito['fecha'].".<br /><br />";

                echo "<h2>Dirección: </h2><br />".utf8_encode($necesito['direccion']).".<br /><br />";
                echo "<h2>Monedas: 10</h2><br /><br />";
                echo "</div>";
                    echo"<div class='notimg'>";
                    echo "<img src='$fichero' width='60%' /><br />";
                     echo"</div>";
                } else {
                    echo "<div class='notic'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'><h1>".utf8_encode($necesito['nombre'])."</h1></a><br />";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($necesito['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$necesito['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($necesito['direccion']).".<br /><br />";
                    echo "<h2>Monedas: 10</h2><br /><br />";
                    echo "</div>";
                    echo"<div class='notimg'>";
                    echo "<img src ='img/no_disponible.jpg'width='40%' /><br />";
                    echo"</div>";
                }
                echo "</div>";
            }
        ?>
    </div>
</div>

<?php
    include "footer.php";
?>
