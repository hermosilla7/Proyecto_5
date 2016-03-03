<?php
    include 'header.php';

    $consulta_actividades = "SELECT actividad.*, tipo_actividad.* FROM actividad INNER JOIN tipo_actividad ON actividad.id_usuario = usuario.id WHERE actividad.id = $_REQUEST[actividad]";
    $result_actividades = mysqli_query($con, $consulta_actividades);
?>

	<div class="titleact">
  		<h1>Modificar actividad</h1>
    </div>
	
	
	<div class="form-group ">
		<form name="f1" action="modificar_actividad.proc.php" method="post" enctype="multipart/form-data"><br /></br />
			<div class="mod-form3">
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" required <?php if(isset($nom_user)){ echo "value = '".$nom_user."'"; } ?>><br />
				</div>
				<div class="form-group">
					<input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required <?php if(isset($apellidos)){ echo "value = '".$apellidos."'"; } ?>><br />
				</div>
				<div class="form-group">
					<input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Formato en minúsculas. Ejemplo: info@gmail.com" required <?php if(isset($mail)){ echo "value = '".$mail."'"; } ?>><br />
				</div>
				<div class="form-group">
					<input type="text" name="telefono" class="form-control" placeholder="Teléfono" pattern="[0-9]{9}" title="Formato correcto: 618589666" required <?php if(isset($telf)){ echo "value = '".$telf."'"; } ?>><br />
				</div>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
			</div>
		</form>
	</div>


<?php
    include 'footer.php';
?>