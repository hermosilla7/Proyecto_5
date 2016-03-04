	<?php
	if ($_REQUEST['tipo_actividad'] == "") {
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
		//extraemos los productos uno a uno en la variable $anuncio que es un array
            while ($ofrezco = mysqli_fetch_array($result_actividades)){
                $fichero = "img/actividades/$ofrezco[img]";
                if (file_exists($fichero) && (($ofrezco['img']) != '')) {
                    echo "<div class='notic' >";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'><h1>".utf8_encode($ofrezco['nombre'])."</h1></a><br/>";
                    echo"<div class='notimg'>";
                    echo "<img src='$fichero' width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($ofrezco['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$ofrezco['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($ofrezco['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "<div class='notic'>";
                    echo  "<a href='ver_mas.php?actividad=".$ofrezco['id']."'><h1>".utf8_encode($ofrezco['nombre'])."</h1></a><br />";
                    echo"<div class='notimg'>";
                    echo "<img src ='img/no_disponible.jpg'width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($ofrezco['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$ofrezco['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($ofrezco['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
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
                $fichero = "img/actividades/$necesito[img]";
                if (file_exists($fichero) && (($necesito['img']) != '')) {
                    echo "<div class='notic'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'><h1>".utf8_encode($necesito['nombre'])."</h1></a><br />";
                    echo"<div class='notimg'>";
                    echo "<img src='$fichero' width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($necesito['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$necesito['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($necesito['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "<div class='notic'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'><h1>".utf8_encode($necesito['nombre'])."</h1></a><br />";
                    echo"<div class='notimg'>";
                    echo "<img src ='img/no_disponible.jpg'width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($necesito['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$necesito['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($necesito['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            }
        ?>
    </div>
</div>
<?php
	}
	else {
		$sql_ofrezco = "SELECT actividad.id, actividad.nombre, actividad.fecha, actividad.img, actividad.direccion, tipo_actividad.nombre AS 'ntact'
                        FROM actividad LEFT JOIN tipo_actividad ON actividad.id_tipo_actividad=tipo_actividad.id
                        WHERE actividad.peticion = 0
                        AND actividad.fecha >= '$fecha'
                        AND id_tipo_actividad = $_REQUEST[tipo_actividad]
                        ORDER BY actividad.fecha DESC";
		$datos_ofrezco = mysqli_query($con, $sql_ofrezco);
		//extraemos los productos uno a uno en la variable $anuncio que es un array
		while($ofrezco = mysqli_fetch_array($datos_ofrezco)){
			$fichero = "img/actividades/$ofrezco[img]";
                if (file_exists($fichero) && (($ofrezco['img']) != '')) {
                        
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
                    echo "<div class='notic' >";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'><h1>".utf8_encode($ofrezco['nombre'])."</h1></a><br/>";
                    echo"<div class='notimg'>";
                    echo "<img src='$fichero' width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($ofrezco['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$ofrezco['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($ofrezco['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "<div class='notic'>";
                    echo  "<a href='ver_mas.php?actividad=".$ofrezco['id']."'><h1>".utf8_encode($ofrezco['nombre'])."</h1></a><br />";
                    echo"<div class='notimg'>";
                    echo "<img src ='img/no_disponible.jpg'width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($ofrezco['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$ofrezco['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($ofrezco['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$ofrezco['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
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
        $sql_necesito = "SELECT actividad.id, actividad.nombre, actividad.fecha, actividad.img, actividad.direccion, tipo_actividad.nombre AS 'ntact'
                        FROM actividad LEFT JOIN tipo_actividad ON actividad.id_tipo_actividad=tipo_actividad.id
                        WHERE actividad.peticion = 1
                        AND actividad.fecha >= '$fecha'
                        AND id_tipo_actividad = $_REQUEST[tipo_actividad]
                        ORDER BY actividad.fecha DESC";
        $datos_necesito = mysqli_query($con, $sql_necesito);
        while($necesito = mysqli_fetch_array($datos_necesito)){
            $fichero = "img/actividades/$necesito[img]";
                if (file_exists($fichero) && (($necesito['img']) != '')) {
                    
                        echo "<div class='notic'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'><h1>".utf8_encode($necesito['nombre'])."</h1></a><br />";
                    echo"<div class='notimg'>";
                    echo "<img src='$fichero' width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($necesito['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$necesito['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($necesito['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "<div class='notic'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'><h1>".utf8_encode($necesito['nombre'])."</h1></a><br />";
                    echo"<div class='notimg'>";
                    echo "<img src ='img/no_disponible.jpg'width='90%' /><br />";
                    echo"</div>";
                    echo"<div class='notcont'>";
                    echo "<h2>Tipo de actividad: </h2><br />".utf8_encode($necesito['ntact']).".<br /><br />";
                    echo "<h2>Fecha: </h2><br />".$necesito['fecha'].".<br /><br />";
                    echo "<h2>Dirección: </h2><br />".utf8_encode($necesito['direccion']).".<br /><br />";
                    echo "<div class='botonindex'>";
                    echo "<a href='ver_mas.php?actividad=".$necesito['id']."'>Ver mas</a>";
                    echo "</div>";
                    echo "</div>";
                    echo"</div>";
                }
                echo "</div>";
            }
         ?>
        </div>
        </div>
      
        <?php

	}
?>
