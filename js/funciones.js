//función para validar el password al crear un nuevo usuario
function validapass() {
    var pass = document.getElementById('pass');
   var repass = document.getElementById('repass');
      if (pass.value != repass.value) {
       alert("Error: No coinciden las contraseñas introducidas");
    }
}

//función para confirmar la baja de un usuario
function confirmar(){
         var txt;
         var r = confirm("¿Quieres darte de baja?");
         if (r == true){
             location.href = "usuarios_baja.proc.php";
         }else{
             //no hará nada
         }
     }

//función para validar el dni
function validardni(){
  var dni = document.getElementById('dni').value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    var numero = dni.substring(0,8);//se recogen las primeras 8 cifras
    var letra = dni.substring(8,9); // se recoge la letra
    letra = letra.toUpperCase(); // se pasa la letra a mayúscula
    var letraCalculada = letras[numero % 23]; //se calcula la letra en función de los 8 primeros dígitos
    if(letraCalculada != letra) {
        alert("Error! Revise el DNI introducido!");
      }
}
