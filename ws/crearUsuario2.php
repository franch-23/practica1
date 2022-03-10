<?php
require __DIR__ . '/../vendor/autoload.php';
use Model\Singleton;
use Model\Usuario;

try {
    $singleton=Singleton::getInstance();
}catch (PDOException $e){
    print_r("No se ha conectado a la base de datos");
    die();
}



if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['contrasena'])  || empty($_POST['nacimiento'])){
    return print_r(json_encode([
        'succes'=>false,
        'message'=>"Se necesitan los valores nombre, apellido, contraseña y nacimiento",
        'data'=>null
    ], JSON_PRETTY_PRINT));
}

$data[':nombre']=$_POST['nombre'];
$data[':apellido']=$_POST['apellido'];
$data[':contrasena']=$_POST['contrasena'];
$data[':nacimiento']=$_POST['nacimiento'];

$data[':telefono']=empty($_POST['telefono']) ? null : $_POST['telefono'];
$data[':email']=empty($_POST['email']) ? null : $_POST['email'];
$data[':sexo']=empty($_POST['sexo']) ? null : $_POST['sexo'];

try {
    $conn=$singleton->prepare(
        "INSERT INTO alumno (nombre, apellidos, PASSWORD, telefono, email, sexo, fecha_nacimiento) 
            VALUES (:nombre,:apellido,:contrasena,:telefono,:email,:sexo,:nacimiento)"
           
    );
    $conn->execute($data);

    return print_r(json_encode([
        'succes'=>true,
        'message'=>"Usuario insertado correctamente",
        'data'=>[
            'nombre'=>$data[':nombre'],
            'apellidos'=>$data[':apellido']
         ]
    ], JSON_PRETTY_PRINT));
}catch (PDOException $e){
    return print_r(json_encode([
        'succes'=>false,
        'message'=>"Usuario no registrado",
        'data'=>null
    ], JSON_PRETTY_PRINT));
}