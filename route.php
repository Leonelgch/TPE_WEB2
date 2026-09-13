<?php

require_once('app/controller/ControllerClubes.php');
require_once('app/controller/ControllerDevs.php');
require_once('app/controller/ControllerJugadores.php');

$controllerClub = new ControllerClubes();
//$controllerDev = new ControllerDevs();
$controllerJugador = new ControllerJugadores();

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = $_REQUEST['action'];

if (empty($action)) {
    $action = 'home';
}

$parametros = explode('/', $action);


switch ($parametros[0]) {
        case 'home': $controllerClub->getClubes(); break;
        case 'club': $controllerClub->getClubesById($parametros[1]) ; break;
  /*      case 'about': 
            if(isset($parametros[1])){
                $controllerDev->getDevsById($parametros[1]); die();
            }
            $controllerDev->getDevsById(1);
        break;*/
        case 'jugadores': $controllerJugador->getJugadorById($parametros[1]) ; break;

}
