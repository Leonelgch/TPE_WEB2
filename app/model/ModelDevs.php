<?php

class ModelDevs extends Model {

    private $db;

    function all()
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM developers");
        $sentencia->execute(); // Ejecutamos la consulta

        $developers = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $developers;
    }

    function getDevById($id)
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM developers WHERE id = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $dev = $sentencia->fetch(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $dev;
    }
}   