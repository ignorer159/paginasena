<?php

$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];

if ($usuario=="admin" && $contraseña==123) {
	header("Location:navegacion.html");
}else{
	header("Location:login.html");
}

?>