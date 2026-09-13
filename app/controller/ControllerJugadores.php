<?php
require_once('app/model/ModelJugadores.php');
require_once('app/view/ViewJugadores.php');
class ControllerJugadores
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ModelJugadores();
        $this->view = new ViewJugadores();
    }

    public function getJugadorById($id)
    {
        $jugador = $this->model->getJugadorById($id);
        $this->view->showJugador($jugador);
    }
}