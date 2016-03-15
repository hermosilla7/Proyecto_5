<?php
	include 'header.php';

	$sql = "SELECT * FROM tipo_actividad";
	$result = mysqli_query($con, $sql);

?>
<?php
if (isset($_SESSION['mail'])) {
        ?>
   <div class="titleact">
        <h1>Creación de eventos</h1>
    </div>
	<div class="mod-form">
 		<div class="form-group ">
			<form name="f1" action="ofrezco_necesito_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group">
					<input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
				</div>
				<div class="form-group">
					<input type="text" name="descripcion" class="form-control" placeholder="Descripción" required><br>
				</div>
				<div class="form-group">
					<input type="datetime-local" name="fecha" class="form-control" placeholder="Fecha/hora" required><br>
				</div>
				<div class="form-group">
					<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" onblur="buscarDireccion();"><br><br>
				</div>
				<?php
					if ($_REQUEST['servicio']==0){
						echo '<input id="radio" type="radio" name="peticion" checked value="0">Ofrezco</br><br>';
						echo '<input id="radio" type="radio" name="peticion" value="1">Necesito</br><br>';
				}else {
						echo '<input id="radio" type="radio" name="peticion" value="0">Ofrezco</br><br>';
						echo '<input id="radio" type="radio" name="peticion" checked value="1">Necesito</br><br>';
				}

				 ?>
				<div class="form-group">
					<input type="file" name="foto" id="foto" class="form-control"></br>
				</div>
							<!-- TIPO ACTIVIDAD -->
				<select id="selects" name="id_tipo_actividad" required>
					<option value="">Seleccionar actividad</option>
					<?php
					while($fila=mysqli_fetch_array($result)){
						echo utf8_encode("<option value=\"$fila[id]\">$fila[nombre]</option>");
					}
		        	?>
			    </select></br><br>
				<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
				<input type="hidden" id="ubicacion_lat" name="ubicacion_lat" class="form-control" placeholder="Latitud"><br>
				<input type="hidden" id="ubicacion_lon" name="ubicacion_lon" class="form-control" placeholder="Longitud"><br>
			</form>
		</div>
	</div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmihl9cGb7phazsa5HoQebsd4Eyv0B4T0&libraries=places"></script>
<?php
    include "footer.php";
} else {
        $_SESSION['error'] = "No te saltes pasos!";
        header("location: index.php");
    }
?>
