<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Página de login</title>
		<link rel="icon" type="image/png" href="img/portada.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<script>
function valEmail(valor){
	re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*[.]([a-z]{2,3})$/
	if(!re.exec(valor)) {
		return false;
	}else{
		return true;
	}
}

function validar(){
	enviar=false;
	if(f1.pass.value==f1.repass.value){
		if(valEmail(f1.correo.value)){
			enviar=true;
		} else {
			alert("El email " + f1.correo.value + " es incorrecto.");
			enviar=false;
		}
	} else {
		alert("Las contraseñas no coinciden");
		enviar=false;
	}

	return enviar;
}
</script>

	</head>
	<body>
		<div class="mod-form">
			<h1>Donaciones</h1>
     		<div class="form-group ">
				<form name="f1" action="donaciones.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="correo" class="form-control" placeholder="Correo" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="visa" class="form-control" placeholder="Número de VISA" required><br>
					</div>
					<div class="form-group">
						<input type="password" name="pin" class="form-control" placeholder="Pin VISA" required><br>
					</div>
					<div class="form-group">
						<input type="number" name="cantidad" class="form-control" placeholder="Cantidad a contribuir" required><br>
					</div>
					<button type="submit" class="log-btn" onClick="validar()" name="acce">Donar</button>
					<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
				</form
			</div>
		</div>
	</body>
</html>