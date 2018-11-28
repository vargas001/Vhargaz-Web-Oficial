<?php
$destino= "info@vhargaz.com";
$nombre= $_POST ["nombre"];
$correo= $_POST ["correo"];
$contenido= "Nombre: " . $nombre . "\nCorreo: "  . $correo ;
mail($destino, "Contacto", $contenido);
header("index.html");
?>