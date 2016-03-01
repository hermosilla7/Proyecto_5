<?php
	include 'header.php';
?>
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

</br>
<html>
<h1>CAMPAÑA ASOCIACIÓN DE JUBILADOS CAUSAS SOLIDARIAS</h1>

</br>

Suscríbete a nuestro boletín </br>
Email*: </br>
Nombre*:  </br>
Apellidos:  </br>
Introduce el código de seguridad*: img  
 
 

<br/>
 <div class="footer">
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
 		
 		<center>
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


</html>