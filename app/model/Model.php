<?php

class Model {

private $pdo;

    function __construct()
    {
        $this->conn();
    }

    //Funcion para abrir la conexion
    private function conn()
    {
        $this->pdo = null;

        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'futbol';
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        } catch (Exception  $e) {
            die($e->getMessage());
        }       
    }

    function getPDO(){
        return $this->pdo;
    }
}