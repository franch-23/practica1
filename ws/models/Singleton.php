<?php

namespace Model;

use PDO;

class Singleton{

    private $lenguaje= 'mysql';
    private $host= 'localhost';
    private $nombre= 'colegio';
    private $usuario= 'root';
    private $pass= '';

    private static $instance=null;

    private function __construct(){
        self::$instance=new PDO("{$this->lenguaje}:dbname={$this->nombre};host={$this->host};charset=utf8", $this->usuario, $this->pass);
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            new Singleton();
        }

        return self::$instance;
    }

    public static function cerrar(){
        self::$instance = null;
    }
}

