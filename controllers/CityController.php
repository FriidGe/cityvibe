<?php

    include_once ROOT . '/models/CityModel.php';

    class CityController extends Controller
    {
        public function ActionIndex($city = null)
        {

            $this->model = new CityModel();
            $cities = $this->model->getCities();
            $category = $this->model->getCategoryFromCity($city["city"]);

            $categoryImgs = array();

            foreach ($category as $item) {
                array_push($categoryImgs, $this->model->getCategoryImg($city["city"], $item["category"]));
            }

            for ($i = 0; $i < count($category); $i++) {

                $catImgs = $this->model->getCategoryImg($city["city"], $category[$i]["category"]);

                $img = '/images/Atlanta-Downtown-Centennial-Olympic-Park-Skyline-Sunset-o0gkebkamtat3w9duip0ny9166h6q4sh7pj7boz1tu.jpg';
                foreach ($catImgs as $item) {
                    if ($item["officialImg"] != null) {
                        $img = $item["officialImg"];
                        break;
                    }
                }
                $category[$i] += ["officialImg" => $img];

            }

            $data = [
                "title" => "City Page",
                "header" => "header_second.php",
                "view" => "city.php",
                "currentCity" => $city,
                "cities" => $cities,
                "categorys" => $category,
                "categoryimgs" => $categoryImgs
            ];

            $this->view->render($data);
        }


    }