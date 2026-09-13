<?php

class ModelClubes extends Model {
    
    private $db;

    function all()
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM club");
        $sentencia->execute(); // Ejecutamos la consulta

        $clubes = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $clubes;
    }

    function getClubById($id)
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM club WHERE id = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $club = $sentencia->fetch(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $club;
    }

}