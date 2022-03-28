<?php
$Msg = "Este es un mensaje enviado desde la web de patrilla comunicaciones.\r\n\r\n";
$UserData .= "Nombre y Apellido " . $_POST["Itm_8_00_1"] . "\r\n";
$UserData .= "Ciudad " . $_POST["Itm_8_00_2"] . "\r\n";
$UserData .= "E-mail " . $_POST["Itm_8_00_3"] . "\r\n";
$UserData .= "Teléfono " . $_POST["Itm_8_00_4"] . "\r\n";
$UserData .= "Motivo del Contacto " . $_POST["Itm_8_00_5"] . "\r\n";
mail( "consultas@patrillacomunicaciones.com", "Contacto desde la web", $Msg . $UserData, "From: consultas@patrillacomunicaciones.com");

$Msg = "Su mensaje ha sido recibido, en menos de 24 hs el personal de Patrilla Comunicaciones se contactará con usted.\r\nGracias\r\n\r\n------------------------------------------------------------------------------------------\r\nNo debe contestar a este email\r\n\r\n";
mail( $_POST["Itm_8_00_3"], "Gracias por contactarnos", $Msg, "From: consultas@patrillacomunicaciones.com");

@header("Location: ../index.html");
?>
