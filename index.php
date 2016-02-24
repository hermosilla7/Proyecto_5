<?php
session_start();
error_reporting(0);
$user_id = $_SESSION['id'];
$foto = $_SESSION['img'];
$nom_user=$_SESSION['nombre'];
include 'conexion.proc.php';
$consulta_actividades = "SELECT * FROM actividad where actividad.destacada= 1";
$result_actividades = mysqli_query($con, $consulta_actividades);

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
	<div id="actividades">
            <div class="contact-form">
    <?php

    if (isset($_SESSION['mail'])) {
        ?>

        <?php
    } else {
        $_SESSION['error'] = "No te saltes pasos!";
        header("location: index.php");
    }
    $actividadesArray = [];
    while ($actividad = mysqli_fetch_array($result_actividades)) {
    	echo "<div class='not'>";
	
        echo "<div class='info'><b style='margin-top: 15px;'>Nombre:</b> ";
        echo utf8_encode($actividad['nombre']);
        echo "<br/>";
        echo "<b>Descripción:</b> ";
        echo utf8_encode($actividad['descripcion']);
        echo "<br/></div>";
$fichero = "img/$actividad[img]";
        if (file_exists($fichero) && (($actividad['img']) != '')) {
            echo "<div class='perfil'><img src='$fichero' width='90%' heigth='90%' ></div>";
        } else {
            echo "<div class='perfil'><img src ='img/no_disponible.jpg'width='90%' heigth='90%'/></div>";
        }
        ?>

        <?php echo "<br/><br/></div>";
    }

    ?>
         
            </div>

        </div>
        </div>
  
</div>
<div class="sidebar">


		</div>

<div class="footer">
</div>
	</body>
</html>