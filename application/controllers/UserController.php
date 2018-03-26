<?php

namespace application\controllers;

use application\core\Controller;

class UserController extends Controller
{

    public function checkUserNameAction()
    {
        $response = $this->model->checkUserName();
        echo json_encode($response);
    }

    public function checkUserEmailAction()
    {
        $response = $this->model->getUser();
        echo json_encode($response);
    }

    public function addUserAction(){
        $response = $this->model->addUser();
        echo json_encode($response);
    }
    public function getUserAction(){
        $response = $this->model->getUser();
        echo json_encode($response);
    }

}