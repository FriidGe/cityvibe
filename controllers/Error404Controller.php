<?php

    include_once ROOT . '/models/MainModel.php';

    class Error404Controller extends Controller
    {
        public function ActionIndex()
        {

            $this->model = new MainModel();
            $cities = $this->model->getCities();

            $data = [
                "title" => "404 Error",
                "header" => "header.php",
                "view" => "404.html",
                "cities" => $cities
            ];

            $this->view->render($data);
        }
    }