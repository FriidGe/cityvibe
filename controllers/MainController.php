<?php

    include_once ROOT . '/models/MainModel.php';

    class MainController extends Controller
    {
        public function ActionIndex()
        {

            $this->model = new MainModel();

            $regions = $this->model->getRegions();

            $cities = $this->model->getCities();

            $offImg = $this->model->getCitiesImg();

            $data = [
                "title" => "Main Page",
                "header" => "header.php",
                "view" => "main.php",
                "regions" => $regions,
                "cities" => $cities,
                "offimg" => $offImg
            ];

            $this->view->render($data);
        }

    }