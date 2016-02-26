<?php
session_start();
error_reporting(0);
$user_id = $_SESSION['id'];
$foto = $_SESSION['img'];
$nom_user=$_SESSION['nombre'];
include 'conexion.proc.php';
$consulta_actividades = "SELECT * FROM actividad where actividad.estado= 2";
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
        
        </div>
  
</div>
<div class="sidebar">


		</div>

<?php
include "footer.php";
?>
	</body>
</html>