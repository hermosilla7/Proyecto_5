<?php

// ------------------------ Enviar correo para ponerse en contacto -------------------- //

    $email="mesde65.club@gmail.com";

    $mailorigen="mesde65.club@gmail.com";
    $passwordorigen="mesde65PR05";

    $copy="mesde65.club@gmail.com";
    $copyCentre="mesde65.club@gmail.com";

    $subject=generarTitolEmail();
    $text= generarCosEmail();

    include "mail/email.func.php";

    $okMail = enviaMail($mailorigen, $passwordorigen, $email, $subject, $text, $copy, $copyCentre);

    function generarCosEmail(){
        $msg = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
        $msg .= "<p>Mensaje recibido:</p></br></br>";
        $msg .= "<ul><li><b>Nombre y Apellidos:</b> ".utf8_decode($_REQUEST["nombre"])." ".utf8_decode($_REQUEST["apellidos"])."</li>";
        $msg .= "<li><b>Correo electr&oacute;nico:</b> ".utf8_decode($_REQUEST["correo"])."</li>";
        $msg .= "<li><b>Tel&eacute;fono: </b>".utf8_decode($_REQUEST["telefono"])."</li></ul>";
        $msg .= "<p>M&eacute;s de 65 - Club solidario</p></br></br>";
        
        //ChromePhp::log($msg);
        return $msg;
    }

    function generarTitolEmail(){
        $titol = utf8_decode('Més de 65 - Un usuario se ha puesto en contacto');
        return $titol;
    }

    // --------------------------------------------------------------------------------------------//

?>