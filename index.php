<?php
session_start();
error_reporting(0);
$user_id = $_SESSION['id'];
$foto = $_SESSION['img'];
$nom_user=$_SESSION['nombre'];
include 'conexion.proc.php';

// Peticiones Ofrezco
$consulta_actividades = "SELECT actividad.nombre, actividad.fecha, actividad.img, actividad.compensacion, actividad.direccion, tipo_actividad.nombre FROM actividad INNER JOIN tipo_actividad ON actividad.id_tipo_actividad=tipo_actividad.id WHERE actividad.peticion = 0";
$result_actividades = mysqli_query($con, $consulta_actividades);

// Peticiones Necesito
$consulta_actividades2 = "SELECT actividad.nombre, actividad.fecha, actividad.img, actividad.compensacion, actividad.direccion, tipo_actividad.nombre FROM actividad INNER JOIN tipo_actividad ON actividad.id=tipo_actividad.id WHERE actividad.peticion = 1";
$result_actividades2 = mysqli_query($con, $consulta_actividades2);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Jubilados</title>
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<script>
                function confirmar(){
                    var txt;
                    var r = confirm("¿Quieres darte de baja?");
                    if (r == true){
                        location.href = "usuarios_baja.proc.php";
                    }else{
                        //no hará nada
                    }
                }
            </script>
	</head>
	<body>	
<?php
include "header.php";
?>
<br>
<br>

<?php
include "with-jquery.html";
?>
<div class="content">
    <div class="destacado">
        <h1>Ofrezco</h1>
        <?php
            if (isset($_SESSION['id'])){
        ?>
        <a href="ofrezco_necesito_insert.php"><img src="img/plus.png" /></a> 
        <?php
            }

            while ($ofrezco = mysqli_fetch_array($result_actividades)){
                $fichero = "img/$ofrezco[img]";
                if (file_exists($fichero) && (($ofrezco['img']) != '')) {
                    echo "<img src='$fichero' width='60%' /><br />";
                } else {
                    echo "<img src ='img/no_disponible.jpg'width='40%' /><br />";
                }
                echo "Título actividad: ".utf8_encode($ofrezco['nombre'])."<br />";
                echo "Fecha: ".$ofrezco['fecha']."<br />";
                echo "Tipo de actividad: ".utf8_encode($ofrezco['nombre'])."<br />";
                echo "Dirección: ".utf8_encode($ofrezco['direccion'])."<br />";
                echo "Monedas: ".$ofrezco['compensacion']."<br />";
                echo "<a href='#'>Ver más</a><br /><br />";
            }
        ?>
    </div>
  

    <div class="necesito">
        <h1>Necesito</h1>
        <?php
            if (isset($_SESSION['id'])){
        ?>
        <a href="ofrezco_necesito_insert.php"><img src="img/plus.png" /></a>  
        <?php
            }

            while ($necesito = mysqli_fetch_array($result_actividades2)){
                $fichero = "img/$necesito[img]";
                if (file_exists($fichero) && (($necesito['img']) != '')) {
                    echo "<img src='$fichero' width='60%' /><br />";
                } else {
                    echo "<img src ='img/no_disponible.jpg'width='40%' /><br />";
                }
                echo "Título actividad: ".utf8_encode($necesito['nombre'])."<br />";
                echo "Fecha: ".$necesito['fecha']."<br />";
                echo "Tipo de actividad: ".utf8_encode($necesito['nombre'])."<br />";
                echo "Dirección: ".utf8_encode($necesito['direccion'])."<br />";
                echo "Monedas: ".$necesito['compensacion']."<br />";
                echo "<a href='#'>Ver más</a><br /><br />";
            }
        ?>
    </div>
</div>
<?php
include "footer.php";
?>
	</body>
</html>