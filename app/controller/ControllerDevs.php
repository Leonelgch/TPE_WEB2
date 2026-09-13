<?php
require_once('app/model/ModelDevs.php');
require_once('app/view/ViewDevs.php');
class ControllerDevs
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ModelDevs();
        $this->view = new ViewDevs();   
    }

    public function getDevsById($id)
    {
        $dev = $this->model->getDevById($id);
        $this->view->showDev($dev);
    }
}
