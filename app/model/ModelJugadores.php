<?php
require_once('app/model/Model.php');

class ModelJugadores extends Model{
    
    private $db;

    function all()
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM jugador");
        $sentencia->execute(); // Ejecutamos la consulta

        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $jugadores;
    }

    function getJugadorById($id)
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM jugador WHERE id_jugador = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $jugador = $sentencia->fetch(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $jugador;
    }
}