<?php
require __DIR__ . '/../vendor/autoload.php';
use Model\Singleton;

try {
    $singleton=Singleton::getInstance();
}catch (PDOException $e){
    print_r("No se ha conectado a la base de datos");
    die();
}

$data[':id']=null;


if(empty($_POST['id'])){
    $singleton=Singleton::cerrar();
    return print_r(json_encode([
        'succes'=>false,
        'message'=>"Usuario no encontrado",
        'data'=>null
    ]));
}else{
    $data[':id']=$_POST['id'];
}

$conn=$singleton->prepare("select * from alumno where id=:id");
$conn->execute($data);

$user=$conn->fetch();

if(empty($user)){
    $singleton=Singleton::cerrar();
    return print_r(json_encode([
        'succes'=>false,
        'message'=>"Usuario no encontrado",
        'data'=>null
    ]));
}

//print_r($user);

$data[':nombre']=isset($_POST['nombre']) ? $_POST['nombre']:$user['nombre'];
$data[':apellido']=isset($_POST['apellido']) ? $_POST['apellido']:$user['apellidos'];
$data[':contrasena']=isset($_POST['contrasena']) ? $_POST['contrasena']:$user['password'];
$data[':telefono']=isset($_POST['telefono']) ? $_POST['telefono']:$user['telefono'];
$data[':email']=isset($_POST['email']) ? $_POST['email']:$user['email'];
$data[':sexo']=isset($_POST['sexo']) ? $_POST['sexo']:$user['sexo'];
$data[':nacimiento']=isset($_POST['nacimiento']) ? $_POST['nacimiento']:$user['fecha_nacimiento'];

//$query="UPDATE alumno SET nombre='$nombre', apellidos='$apellido', password='$contrasena', telefono='$telefono', email='$email', sexo='$sexo', fecha_nacimiento='$nacimiento' WHERE id='$id'";

$query="UPDATE alumno SET nombre=:nombre, apellidos=:apellido, password=:contrasena, telefono=:telefono, email=:email, sexo=:sexo, fecha_nacimiento=:nacimiento WHERE id=:id";

try {
    $update=$singleton->prepare($query);
    $update->execute($data);

    $singleton=Singleton::cerrar();

    return print_r(json_encode([
        'succes'=>true,
        'message'=>"Usuario modificado",
        'data'=>[
            'nombre'=>$data[':nombre'],
            'apellido'=>$data[':apellido']
        ]
    ], JSON_PRETTY_PRINT));
}catch (PDOException $e){
    $singleton=Singleton::cerrar();

    return print_r(json_encode([
        'succes'=>false,
        'message'=>"El usuario no ha sido modificado",
        'data'=>null
    ], JSON_PRETTY_PRINT));
}

