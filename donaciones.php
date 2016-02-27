<?php
	session_start();
	$user_id = $_SESSION['id'];
	error_reporting(0);
	include 'header.php';
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
		<div class="donaciones">
		<div class="mod-form">
			<h1>Donaciones</h1>
     		<div class="form-group ">
				<form name="f1" action="donaciones.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
			
						<input type="text" name="visa" class="form-control" placeholder="Número de VISA" required><br>
					
						<input type="password" name="pin" class="form-control" placeholder="Pin VISA" required><br>
				
						<input type="number" name="cantidad" class="form-control" placeholder="Cantidad a contribuir" required><br>
					</div>
					<button type="submit" class="log-btn2" onClick="validar()" name="acce">Donar</button>
				</form
			</div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>
	</body>
</html>