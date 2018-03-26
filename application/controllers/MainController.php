<?php

namespace application\controllers;

use application\core\Controller;
//use application\core\Model;

class MainController extends Controller
{

    public function indexAction()
    {
        $users = $this->model->getUsers();
        $vars = [
            'users' => $users,
        ];
        $this->view->render('Главная страница', $vars);

    }

    public function addUsersAction()
    {

        $region = $this->model->getRegion();
        $vars = [
            'region' => $region,
        ];
        $this->view->render('Добавление пользователя', $vars);

    }


}