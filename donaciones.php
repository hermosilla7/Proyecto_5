<?php
	include 'header.php';
?>
<?php
if (isset($_SESSION['mail'])) {
        ?>
  	<div class="titledona">
    	<h1>Campaña Solidaria</h1>
    </div>
	<div class="donacio">

		<div class="donaciones">
			<div class="mod-form2">
				<h1>Donaciones</h1>
	     		<div class="form-group ">
					<form name="f1" action="donaciones.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">

						<i class="fa fa-cc-visa"></i><input type="text" name="visa" class="form-control" placeholder="Número de VISA" required><br>

						<i class="fa fa-lock"></i><input type="password" name="pin" class="form-control" placeholder="Pin VISA" required><br>

						<i class="fa fa-money"></i><input type="number" name="cantidad" class="form-control" placeholder="Cantidad a contribuir" required><br>

						<button type="submit" class="log-btn2" onClick="validar()" name="acce">Donar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="donacionestxt">
<br/>
<p> Colaborar con un nuestro CLUB SOLIDARIO MÉS DE 65 es una buena forma para ayudar a los demas.
			Elegir nuestro CLUB SOLIDARIO MÉS DE 65 es muy buena elección. Nuestra labor,
			es colaborar y ayudar a las personas que lo necesitan y que éstas también aporten ayuda a otras.
		Todas las personas tenemos alguna cualidad que otras no poseen, por eso creemos que todos nos podemos
		ayudar.

		Tú también puedes colaborar y ayudar hacer posible los proyectos de desarrollo que realiza nuestro
		CLUB SOLIDARIO MÉS DE 65.
		Cada euro es destinado para ayudar a sus asociados a realizar y disfrutar de las actividades.

 		¿Cómo puedo colaborar con nuestro CLUB SOLDARIO MÉS DE 65?

 		Suscríbete y haz un donativo a nuestro CLUB SOLIDARIO MÉS DE 65.
 		La forma rápida y segura de pagar en Internet con PAYPAL.

	 ¡Anímate a colaborar con nuestro CLUB SOLIDARIO MÉS DE 65
	para así ayudar a lograr un mundo mejor para nuestros asociados.</p>
	</div>
			<div class="formaPago">
	       	<img src="./img/formapago/1.jpg">
	         <img src="./img/formapago/2.jpg">
	         <img src="./img/formapago/3.jpg">
	         <img src="./img/formapago/4.jpg">
	         <img src="./img/formapago/5.jpg">
		</div>
			<div class="espacio">
	</div>

<?php
    include "footer.php";
} else {
        $_SESSION['error'] = "No te saltes pasos!";
        header("location: index.php");
    }
?>
