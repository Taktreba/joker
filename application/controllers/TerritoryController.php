<?php

namespace application\controllers;

use application\core\Controller;

class TerritoryController extends Controller
{

    public function regionAction()
    {
        $response = $this->model->getRegion();
        echo json_encode($response);
    }

    public function cityAction()
    {
        $response = $this->model->getCity();
        echo json_encode($response);
    }

    public function districtsAction()
    {
        $response = $this->model->getDistricts();
        echo json_encode($response);
    }

}