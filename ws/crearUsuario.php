<?php

require_once "interfaces/IToJson.php";
require_once "models/User.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sexo=$_POST['sexo_r'];

$usuario = new User("fran","romero",645717349,"franciscoballesta4@gmail.com","fran","hombre");

echo json_encode($usuario);
"<br>";
echo ("nombre:").$nombre."<br>";
echo ("apellido:").$apellido."<br>";
echo ("contraseña:").$contraseña."<br>";
echo ("telefono:").$telefono."<br>";
echo ("email:").$email."<br>";
echo ("sexo:").$sexo."<br>";

