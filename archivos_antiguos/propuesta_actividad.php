<?php
	session_start();
	error_reporting(0);
	include 'header.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Proponer actividades</title>
		<link rel="icon" type="image/png" href="img/portada.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="mod-form">
			<h1>Proponer actividades</h1>
     		<div class="form-group ">
				<form name="f1" action="usuarios_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required><br>
					</div>
					<div class="form-group">
						<input type="number" name="numero_plazas" class="form-control" placeholder="Numero de plazas" required><br>
					</div>
					<div class="form-group">
						<input type="datetime-local" name="fecha_inicio" min="2000-01-02" class="form-control" placeholder="Fecha inicio" required><br>
					</div>
					<div class="form-group">
						<input type="datetime" name="fecha_fin" class="form-control" placeholder="Fecha fin" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="ubicacion_lat" class="form-control" placeholder="Ubicacion latitud" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="ubicacion_lon" class="form-control" placeholder="Ubicacion longitud" required><br>
					</div>
					<div class="form-group">
						<input type="file" name="foto" id="foto" class="form-control"></br>
					</div>
					<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
					<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
				</form
			</div>
		</div>
	</body>
</html>