<?php

require_once "interfaces/IToJson.php";
require_once "models/User.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sexo=$_POST['sexo_r'];

$usuario = new User("$nombre","$apellido",$telefono,"$email","$contraseña","$sexo");

$archivo = fopen('archivo.txt','a');
fwrite($archivo, "nombre:".$usuario->nombre.PHP_EOL);
fwrite($archivo, "apellido:".$usuario->apellido.PHP_EOL);
fwrite($archivo, "telefono:".$usuario->telefono.PHP_EOL);
fwrite($archivo, "email:".$usuario->email.PHP_EOL);
fwrite($archivo, "contraseña:".$usuario->contraseña.PHP_EOL);
fwrite($archivo, "sexo:".$usuario->sexo.PHP_EOL);
fclose($archivo);

echo json_encode($usuario);
