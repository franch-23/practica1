<?php

class User implements IToJson {
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $contraseña;
    public $sexo;

    //Constructor//

    function __construct($nombre,$apellido,$telefono,$email,$contraseña,$sexo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->contraseña = $contraseña;
        $this->sexo = $sexo;
    }

    //Getter//

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }

    public function getSexo()
    {
        return $this->sexo;
    }


    //Setter//

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }



    public function ToJson()
    {
       return json_encode($this->getnombre, $this->getapellido, $this->gettelefono, $this->getemail, $this->getcontraseña, $this->getsexo);
    }
}