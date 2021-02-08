<?php
if ($_REQUEST['idForm'] == 1) {
    $recipient = "info@h3ocargo.com";
    $subject = "Informacion";
    $location = "/";
    $sender = $_REQUEST['email'];
    $body .= "Nombre: ".$_REQUEST['name']." \n";
    $body .= "Email: ".$_REQUEST['email']." \n";
    $body .= "Mensaje: ".$_REQUEST['message']." \n";
    $headers = "From: ".$_REQUEST['name']." <".$sender.">\r\n";
    mail( $recipient, $subject, $body, $headers ) or die ("Mail could not be sent.");
    header( "Location: $location" );
} else if ($_REQUEST['idForm'] == 2) {
    $recipient = "tracking@h3ocargo.com";
    $subject = "Reporte de Tracking";
    $location = "/";
    $sender = $_REQUEST['email'];
    $body .= "Nombre: ".$_REQUEST['name']." \n";
    $body .= "Email: ".$_REQUEST['email']." \n";
    $body .= "Mensaje: ".$_REQUEST['message']." \n";
    $headers = "From: ".$_REQUEST['name']." <".$sender.">\r\n";
    $headers2 = "From: H3O CARGO <".$recipient.">\r\n";
    (mail( $recipient, $subject, $body, $headers ) and
    mail( $sender, $subject, $body, $headers2 )) or die ("Mail could not be sent.");
    header( "Location: $location" );
}
 ?>

