<?php
	include 'header.php';
?>
  	<div class="titledona">
    	<h1>Campaña asociación de jubilados causas solidarias</h1>
    </div>
	<div class="donacio">
	
		<div class="donaciones">
			<div class="mod-form">
				<h1>Donaciones</h1>
	     		<div class="form-group ">
					<form name="f1" action="donaciones.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				
						<input type="text" name="visa" class="form-control" placeholder="Número de VISA" required><br>
						
						<input type="password" name="pin" class="form-control" placeholder="Pin VISA" required><br>
					
						<input type="number" name="cantidad" class="form-control" placeholder="Cantidad a contribuir" required><br>

						<button type="submit" class="log-btn2" onClick="validar()" name="acce">Donar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="donacionestxt">

	 		<p>Suscríbete haz donativos a LA AS0CIACIÓN DE JUBILADOS MÉS DE 65 con Paypal
			PayPal. La forma rápida y segura de pagar en Internet. 
			Campaña ASOCIACIÓN DE JUBILADOS MÉS DE 65 2016
	 
			¿Cómo puedo colaborar con la ASOCIACIÓN DE JUBILADOS MÉS DE 65?
			</p>
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
	<p>
	<br>
	Colaborar con una ASOCIACIÓN DE JUBILADOS MÉS DE 65 es una buena forma para ayudar a los demas.
			Elegir la ASOCICIÓN DE JUBILADOS MÉS DE 65 es muy buena elección. Nuestra labor,
			esfuerzo y colaboración constante en ayudar a las personas más necesitadas.

			Tú también puedes colaborar para ayudar hacer posible los proyectos de desarrollo que realiza nuestra ASOCIACIÓN DE JUBILADOS MÉS DE 65.
			Cada euro es destinado para ayudar a sus asociados a realizar y disfrutar de las actividades.


			¡Deja de buscar una ASOCIACIÓN para colaborar, porque ya la has encontrado! ¡Anímate a colaborar con la ASOCIACIÓN DE JUBILADOS MÉS DE 65
			para así ayudar a lograr un mundo mejor para todos.</p>

	</div>
			<div class="formaPago">
       	 <img src="./img/servired.jpg" width="85" height="50">
         <img src="./img/maestro.jpg" width="85" height="50">
         <img src="./img/VISA(1).jpg" width="85" height="50">
         <img src="./img/americanexpress.jpg" width="85" height="50"> 
         <img src="./img/euro6000.jpg" width="85" height="50"> 
         <img src="./img/4b.jpg" width="85" height="50"> 
         <img src="./img/mastercard.jpg" width="85" height="50"> 
         <img src="./img/paypal.jpg" width="85" height="50">
        <img src="./img/trasnferencia.jpg" width="85" height="50" class="last"> 
			
		</div>

<?php
	include "footer.php";
?>