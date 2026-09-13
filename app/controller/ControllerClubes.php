<?php
require_once('app/model/ModelClubes.php');
require_once('app/view/ViewClubes.php');

class ControllerClubes
{

    private $model;
    private $view;
    public function __construct()
    {
        $this->model = new ModelClubes();
        $this->view = new ViewClubes();
    }

    function getClubes()
    {
        $clubes = $this->model->all();
        $this->view->showClubes($clubes);
    }
    public function getClubesById($id)
    {
        $club = $this->model->getClubById($id);
        $this->view->showClub($club);
    }
}
