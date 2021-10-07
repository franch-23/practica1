<?php

require_once "interfaces/IToJson.php";
require_once "models/User.php";

$usuario = new User("fran","romero",645717349,"franciscoballesta4@gmail.com","fran","hombre");

echo json_encode($usuario);
